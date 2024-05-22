<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardGameController extends AbstractController
{
    #[Route("/session", name: "session_debug")]
    public function showSession(SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        $hand = $session->get('hand');

        return $this->render('card/session.html.twig', [
            'deck' => $deck,
            'hand' => $hand
        ]);
    }

    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('success', 'Session has been successfully deleted ✔️.');

        return $this->redirectToRoute('session_debug');
    }

    #[Route("/card", name: "card_start")]
    public function home(): Response
    {
        return $this->render("card/home.html.twig");
    }

    #[Route("/card/deck", name: "card_deck")]
    public function test(): Response
    {
        $deck = new DeckOfCards();
        $groupedCards = $deck->getsortedCards();

        return $this->render('card/deck.html.twig', [
            'groupedCards' => $groupedCards,
        ]);
    }

    #[Route("/card/deck/shuffle", name: "card_shuffle")]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $this->deleteSession($session);

        $deck = new DeckOfCards();
        $deck->shuffle();
        $shuffledCards = $deck->getCards();

        return $this->render('card/card_shuffle.html.twig', [
            'shuffledCards' => $shuffledCards,
        ]);
    }

    #[Route("/card/deck/draw", name:"card_draw")]
    public function drawCardDeck(Request $request, SessionInterface $session): Response
    {
        /** @var DeckOfCards $deck */
        $deck = $session->get('deck', new DeckOfCards());
        /** @var CardHand $hand */
        $hand = $session->get('hand', new CardHand());

        $drawnCard = $deck->drawCard();
        if ($drawnCard !== null) {
            $hand->addCard($drawnCard);
        }

        $session->set('deck', $deck);
        $session->set('hand', $hand);

        $cardsRemaining = count($deck->getCards());

        return $this->render('card/draw_card.html.twig', [
            'drawnCard' => $drawnCard,
            'cardsRemaining' => $cardsRemaining,
        ]);
    }

    #[Route("/card/deck/draw/{num}", name:"card_draw_number")]
    public function drawCardNum(Request $request, SessionInterface $session, int $num): Response
    {
        /** @var DeckOfCards $deck */
        $deck = $session->get('deck', new DeckOfCards());
        /** @var CardHand $hand */
        $hand = $session->get('hand', new CardHand());

        $drawnCards = [];
        for ($i = 0; $i < $num; $i++) {
            $drawnCard = $deck->drawCard();
            if ($drawnCard !== null) {
                $hand->addCard($drawnCard);
                $drawnCards[] = $drawnCard;
            } else {
                break;
            }
        }

        $session->set('deck', $deck);
        $session->set('hand', $hand);
        $cardsRemaining = count($deck->getCards());

        return $this->render('card/draw_cards.html.twig', [
            'drawnCards' => $drawnCards,
            'cardsRemaining' => $cardsRemaining,
        ]);
    }
}
