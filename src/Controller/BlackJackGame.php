<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\Player;
use App\Card\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use LogicException;

class BlackJackGame extends AbstractController
{
    #[Route("/game/reset", name: "game_reset", methods: ["POST"])]
    public function reset(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute("game_setup");
    }

    #[Route("game/", name: "game-page")]
    public function home(): Response
    {
        return $this->render("black-jack/game.html.twig");
    }

    #[Route("/game/doc", name: "game-doc")]
    public function doc(): Response
    {
        return $this->render("black-jack/doc.html.twig");
    }

    #[Route("/setup", name: "game_setup")]
    public function setup(): Response
    {
        return $this->render('black-jack/form.html.twig');
    }

    #[Route("/start", name: "game_start", methods: ["POST"])]
    public function start(Request $request, SessionInterface $session): Response
    {
        $playerData = $request->request->all('players');
        $players = [];
        foreach ($playerData as $data) {
            $players[] = new Player($data['name'], (int)$data['balance']);
        }

        $deck = new DeckOfCards();
        $deck->shuffle();

        $bank = new Player('Bank');

        foreach ($players as $player) {
            $this->addCardToPlayer($player, $deck);
            $this->addCardToPlayer($player, $deck);

            if ($player->hasBlackJack()) {
                $player->adjustBalance($player->getBalance() * 1.5);
                $player->setStatus('done');
            }
        }

        $this->addCardToPlayer($bank, $deck);
        $this->addCardToPlayer($bank, $deck);

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    #[Route("/hit/{playerIndex}", name: "game_hit")]
    public function hit(int $playerIndex, SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        $players = $session->get('players');
        $bank = $session->get('bank');

        if (!is_array($players) || !$deck instanceof DeckOfCards || !$bank instanceof Player) {
            throw new LogicException('Session data is corrupted.');
        }

        $player = $players[$playerIndex];
        $this->addCardToPlayer($player, $deck);

        if ($player->isBusted()) {
            $bank->adjustBalance($player->getBalance());
            $player->adjustBalance(-$player->getBalance());
            $player->setStatus('done');
        }

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);

        if ($this->areAllPlayersDone($players)) {
            return $this->redirectToRoute('game_dealer');
        }

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    #[Route("/stay/{playerIndex}", name: "game_stay")]
    public function stay(int $playerIndex, SessionInterface $session): Response
    {
        $players = $session->get('players');
        $bank = $session->get('bank');

        if (!is_array($players) || !$bank instanceof Player) {
            throw new LogicException('Session data is corrupted.');
        }

        $player = $players[$playerIndex];
        $player->setStatus('done');

        $session->set('players', $players);

        if ($this->areAllPlayersDone($players)) {
            return $this->redirectToRoute('game_dealer');
        }

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    #[Route("/dealer", name: "game_dealer")]
    public function dealer(SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        $players = $session->get('players');
        $bank = $session->get('bank');

        if (!is_array($players) || !$deck instanceof DeckOfCards || !$bank instanceof Player) {
            throw new LogicException('Session data is corrupted.');
        }

        while ($bank->getHandValue() < 17) {
            $this->addCardToPlayer($bank, $deck);
        }

        if ($bank->isBusted()) {
            foreach ($players as $player) {
                if (!$player->isBusted()) {
                    $player->adjustBalance($player->getBalance());
                }
            }
        } else {
            foreach ($players as $player) {
                if (!$player->isBusted()) {
                    if ($player->getHandValue() > $bank->getHandValue()) {
                        $player->adjustBalance($player->getBalance());
                    } else {
                        $bank->adjustBalance($player->getBalance());
                        $player->adjustBalance(-$player->getBalance());
                    }
                }
            }
        }

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);
        $this->addFlash('success', 'The Round is over!!');

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * @param Player[] $players
     */
    private function areAllPlayersDone(array $players): bool
    {
        foreach ($players as $player) {
            if ($player->getStatus() !== 'done') {
                return false;
            }
        }
        return true;
    }

    private function addCardToPlayer(Player $player, DeckOfCards $deck): void
    {
        $card = $deck->drawCard();
        if (!$card instanceof Card) {
            throw new LogicException('Failed to draw a card from the deck.');
        }
        $player->addCard($card);
    }

    #[Route("/api/game", name: "api_game")]
    public function apiGame(SessionInterface $session): JsonResponse
    {
        $players = $session->get('players', []);
        if (!is_array($players)) {
            throw new LogicException('Session data is corrupted.');
        }

        $playersData = [];
        foreach ($players as $player) {
            $playersData[] = [
                'name' => $player->getName(),
                'balance' => $player->getBalance(),
                'hand' => $player->getHand(),
                'status' => $player->getStatus(),
            ];
        }

        return new JsonResponse($playersData);
    }
}
