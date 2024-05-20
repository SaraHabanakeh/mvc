<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardHand;

class Player
{
    private $name;
    private $hand;
    private $balance;
    private $status;

    public function __construct(string $name, int $balance = 0)
    {
        $this->name = $name;
        $this->hand = new CardHand();
        $this->balance = $balance;
        $this->status = 'playing';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addCard(Card $card): void
    {
        $this->hand->addCard($card);
    }

    public function getHandValue(): int
    {
        return $this->hand->totalValue();
    }

    public function getHand(): CardHand
    {
        return $this->hand;
    }

    public function isBusted(): bool
    {
        return $this->hand->totalValue() > 21;
    }

    public function hasBlackJack(): bool
    {
        return $this->hand->totalValue() == 21 && count($this->hand->getCards()) == 2;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function adjustBalance(float $amount): void
    {
        $this->balance += $amount;
    }

    public function clearHand(): void
    {
        $this->hand = new CardHand();
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
