<?php

namespace App\Card;

class Card
{
    private $suit;
    private $value;

    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getSuit(): string
    {
        return $this->suit;
    }

    public function getValue(): int
    {
        return $this->value;
    }


    public function getAsString(): string
    {
        return $this->value . ' of ' . $this->suit;
    }

    // Black Jack card value
    public function cardValue(): int
    {
        // Face cards (Jack, Queen, King) are represented by values 11, 12, 13 respectively.
        // In Black Jack, they all have a value of 10.
        if (in_array($this->value, [11, 12, 13])) {
            return 10;
        }
        // Ace (represented by 1) can be 1 or 11, but the logic to choose 1 or 11 is handled elsewhere
        return $this->value;
    }

}
