<?php
namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use App\Card\Player;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use LogicException;

class ApiController
{
    #[Route("/api/quote", name: "api-quote")]
    public function getDailyQuote(): Response
    {
        $quotes = [
            "You can't go back and change the beginning, but you can start where you are and change the ending. - C.S. Lewis",
            "Nothing is impossible, the word itself says 'I'm possible'! - Audrey Hepburn",
            "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        ];
    
        $randomIndex = array_rand($quotes);
        $quote = $quotes[$randomIndex];
    
        $data = [
            'quote' => $quote,
            'date' => date('Y-m-d'),
            'timestamp' => time()
        ];
    
        return new JsonResponse($data, Response::HTTP_OK, [], true); // Ensure the fourth parameter is set to true
    }

    #[Route("/api/deck", name:"api-deck")]
    public function getDeck(): JsonResponse
    {
        $deck = new DeckOfCards();
        $sortedDeck = $deck->getSortedCards();

        $rows = array_chunk($sortedDeck, 13, true);

        return new JsonResponse($rows, JsonResponse::HTTP_OK, [], true);
    }

    #[Route("/api/deck/shuffle", name:"api-shuffle", methods: ['POST', 'GET'])]
    public function getShuffleCards(Request $request, SessionInterface $session): Response
    {
        $deck = new DeckOfCards();
        $deck->shuffle();
        $shuffledCards = $deck->getSortedCards();

        $representations = [];
        foreach ($shuffledCards as $suit => $cards) {
            foreach ($cards as $value => $representation) {
                $representations[] = $representation;
            }
        }

        $session->set('shuffled_deck', $representations);

        $shuffledDeckArray = $session->get('shuffled_deck', []);
        $jsonString = json_encode($shuffledDeckArray, JSON_UNESCAPED_UNICODE);

        if ($jsonString === false) {
            throw new LogicException('Failed to encode JSON.');
        }

        return new Response($jsonString, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }

    #[Route("/api/deck/draw/{number}", name: "api_draw_cards", methods: ['POST', 'GET'])]
    public function drawCards(Request $request, SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', new DeckOfCards());
        $hand = $session->get('hand', new CardHand());

        if (!$deck instanceof DeckOfCards || !$hand instanceof CardHand) {
            throw new LogicException('Session data is corrupted.');
        }

        $drawnCards = [];
        for ($i = 0; $i < $number; $i++) {
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

        $drawnCardsRepresentations = [];
        foreach ($drawnCards as $card) {
            $drawnCardsRepresentations[] = $card->getAsString();
        }

        $data = [
            'drawnCards' => $drawnCardsRepresentations,
            'cardsRemaining' => $cardsRemaining,
        ];

        $jsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
        if ($jsonString === false) {
            throw new LogicException('Failed to encode JSON.');
        }

        return new Response($jsonString, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }

    #[Route("/api/game", name: "api_game")]
    public function apiGame(SessionInterface $session): Response
    {
        $players = $session->get('players', []);
        if (!is_array($players)) {
            throw new LogicException('Session data is corrupted.');
        }

        $playersData = [];
        foreach ($players as $player) {
            if ($player instanceof Player) {
                $playersData[] = [
                    'name' => $player->getName(),
                    'balance' => $player->getBalance(),
                    'hand' => $player->getHand(),
                    'status' => $player->getStatus(),
                ];
            }
        }

        return new JsonResponse($playersData);
    }
}
