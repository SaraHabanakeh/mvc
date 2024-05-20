<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardGraphic;

class DeckOfCards
{
    private $cards = [];

    public function __construct()
    {
        $suits = ['spades', 'heart', 'diamond', 'clover'];
        $values = range(1, 13);

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $card = new CardGraphic($suit, $value);
                $this->cards[] = $card;
            }
        }
    }

    public function getCards(): array
    {
        return $this->cards;
    }


    public function getSortedCards(): array
    {
        $cards = $this->getCards();
        $sortedCards = [];

        foreach ($cards as $card) {
            $suit = $card->getSuit();
            $value = $card->getValue();

            $cardGraphic = new CardGraphic($suit, $value);
            $representation = $cardGraphic->getAsString();
            $sortedCards[$suit][$value] = $representation;
        }
        return $sortedCards;
    }


    public function shuffle(): void
    {
        shuffle($this->cards);
    }

    public function drawCard(): ?Card
    {
        return array_pop($this->cards);
    }


    public function countCards(): int
    {
        return count($this->cards);
    }

    public function dealCards(): ?Card
    {
        return array_pop($this->cards);
    }
}
