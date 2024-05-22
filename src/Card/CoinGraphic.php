<?php

namespace App\Card;

class CoinGraphic
{
    private float $balance; // Specify the type for the $balance property

    public function __construct(float $balance = 0)
    {
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function adjustBalance(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getGraphicRepresentation(): string
    {
        $coins = floor($this->balance);
        $representation = str_repeat('🪙', (int)$coins); // Ensure $times parameter is an integer
        return $representation;
    }
}
