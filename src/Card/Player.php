<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardHand;

class Player
{
    private string $name;
    private CardHand $hand;
    private CoinGraphic $coinGraphic;
    private string $status;

    public function __construct(string $name, float $balance = 0)
    {
        $this->name = $name;
        $this->hand = new CardHand();
        $this->coinGraphic = new CoinGraphic($balance);
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
        return $this->coinGraphic->getBalance();
    }

    public function adjustBalance(float $amount): void
    {
        $this->coinGraphic->adjustBalance($amount);
    }

    public function getBalanceGraphic(): string
    {
        return $this->coinGraphic->getGraphicRepresentation();
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
