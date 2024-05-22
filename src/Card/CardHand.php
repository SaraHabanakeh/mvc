<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    /** @var Card[] */
    private array $cards = []; // Specify the type for the $cards property

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    /** @return Card[] */
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
