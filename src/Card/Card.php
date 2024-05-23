<?php

namespace App\Card;

/**
 * Class representing a playing card with a suit and value.
 */
class Card
{
    /**
     * @var string The suit of the card (spades, hearts, diamonds, clubs).
     */
    private string $suit;

    /**
     * @var int The value of the card (1-13, where 1 is Ace, 11 is Jack, 12 is Queen, and 13 is King).
     */
    private int $value;

    /**
     * Card constructor.
     *
     * @param string $suit The suit of the card.
     * @param int $value The value of the card.
     */
    public function __construct(string $suit, int $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    /**
     * Get the suit of the card.
     *
     * @return string The suit of the card.
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * Get the value of the card.
     *
     * @return int The value of the card.
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Get a string representation of the card.
     *
     * @return string A string representation of the card (e.g., "10 of hearts").
     */
    public function getAsString(): string
    {
        return $this->value . ' of ' . $this->suit;
    }

    /**
     * Get the Black Jack value of the card.
     *
     * @return int The Black Jack value of the card (face cards are worth 10).
     */
    public function cardValue(): int
    {
        if (in_array($this->value, [11, 12, 13])) {
            return 10;
        }

        return $this->value;
    }
}
