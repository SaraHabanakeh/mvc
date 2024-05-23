<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DeckOfCards.
 */
class DeckOfCardsTest extends TestCase
{
    /**
     * Test that a DeckOfCards object can be created.
     */
    public function testCreateDeckOfCards(): void
    {
        $deck = new DeckOfCards();
        $this->assertInstanceOf(DeckOfCards::class, $deck);
    }

    /**
     * Test that the deck contains 52 cards after initialization.
     */
    public function testDeckContains52Cards(): void
    {
        $deck = new DeckOfCards();
        $cards = $deck->getCards();
        $this->assertCount(52, $cards);
    }

    /**
     * Test that the deck contains the correct cards.
     */
    public function testDeckContainsCorrectCards(): void
    {
        $deck = new DeckOfCards();
        $cards = $deck->getCards();

        $suits = ['spades', 'heart', 'diamond', 'clover'];
        $values = range(1, 13);
        $expectedCards = [];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $expectedCards[] = new CardGraphic($suit, $value);
            }
        }

        foreach ($expectedCards as $expectedCard) {
            $found = false;
            foreach ($cards as $card) {
                if ($card->getSuit() === $expectedCard->getSuit() && $card->getValue() === $expectedCard->getValue()) {
                    $found = true;
                    break;
                }
            }
            $this->assertTrue($found, "Deck is missing card: {$expectedCard->getAsString()}");
        }
    }

    /**
     * Test that the deck can be shuffled.
     */
    public function testShuffleDeck(): void
    {
        $deck = new DeckOfCards();
        $originalCards = $deck->getCards();
        $deck->shuffle();
        $shuffledCards = $deck->getCards();

        $this->assertNotEquals($originalCards, $shuffledCards, "Deck should be shuffled");
        $this->assertCount(52, $shuffledCards, "Shuffled deck should still contain 52 cards");
    }

    /**
     * Test that the getSortedCards method returns sorted cards.
     */
    public function testGetSortedCards(): void
    {
        $deck = new DeckOfCards();
        $sortedCards = $deck->getSortedCards();

        $suits = ['spades', 'heart', 'diamond', 'clover'];
        $values = range(1, 13);

        foreach ($suits as $suit) {
            $this->assertArrayHasKey($suit, $sortedCards, "Sorted cards should have suit $suit");
            foreach ($values as $value) {
                $this->assertArrayHasKey($value, $sortedCards[$suit], "Sorted cards should have value $value for suit $suit");
                $expectedCard = new CardGraphic($suit, $value);
                $this->assertEquals($expectedCard->getAsString(), $sortedCards[$suit][$value], "Card representation mismatch for suit $suit and value $value");
            }
        }
    }

    /**
     * Test the drawCard method.
     */
    public function testDrawCard(): void
    {
        $deck = new DeckOfCards();
        $initialCount = $deck->countCards();

        $drawnCard = $deck->drawCard();
        $this->assertInstanceOf(CardGraphic::class, $drawnCard);

        $this->assertEquals($initialCount - 1, $deck->countCards());
    }

    /**
     * Test the countCards method.
     */
    public function testCountCards(): void
    {
        $deck = new DeckOfCards();
        $initialCount = $deck->countCards();

        $this->assertEquals(52, $initialCount);

        $deck->drawCard();
        $this->assertEquals(51, $deck->countCards());
    }
}
