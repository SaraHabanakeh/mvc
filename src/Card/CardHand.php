<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;

class CardHand
{
    private $cards = [];

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function totalValue(): int
    {
        $value = 0;
        $aces = 0;

        foreach ($this->cards as $card) {
            $cardValue = $card->cardValue();
            if ($cardValue == 1) {
                $aces += 1;
            }
            $value += $cardValue;
        }

        while ($aces > 0 && $value <= 11) {
            $value += 10; // Adjust ace value to 11
            $aces -= 1;
        }

        return $value;
    }
}
