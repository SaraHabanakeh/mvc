<?php

namespace App\Controller;

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use App\Card\CardHand;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );

        return $response;
    }


    #[Route("/api/deck", name:"api-deck")]
    public function getDeck(): JsonResponse
    {
        $deck = new DeckOfCards();
        $sortedDeck = $deck->getSortedCards();

        $rows = array_chunk($sortedDeck, 13, true);


        $json = json_encode($rows, JSON_UNESCAPED_UNICODE);


        return new JsonResponse($json, JsonResponse::HTTP_OK, [], true);
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
        return new Response($jsonString, 200, ['Content-Type' => 'application/json']);
    }

    #[Route("/api/deck/draw/{number}", name: "api_draw_cards", methods: ['POST', 'GET'])]
    public function drawCards(Request $request, SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', new DeckOfCards());
        $hand = $session->get('hand', new CardHand());

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
        return new Response($jsonString, Response::HTTP_OK, ['Content-Type' => 'application/json']);
    }


}
