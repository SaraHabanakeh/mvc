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
}
