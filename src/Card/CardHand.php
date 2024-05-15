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
}
