<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Test that a CardHand object can be created.
     */
    public function testCreateCardHand(): void
    {
        $hand = new CardHand();
        $this->assertInstanceOf(CardHand::class, $hand);
    }

    /**
     * Test adding a card to the hand.
     */
    public function testAddCard(): void
    {
        $hand = new CardHand();
        $card = new Card("Hearts", 2);
        $hand->addCard($card);

        $cards = $hand->getCards();
        $this->assertCount(1, $cards);
        $this->assertSame($card, $cards[0]);
    }

    /**
     * Test calculating the total value of the hand without aces.
     */
    public function testTotalValueWithoutAces(): void
    {
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 10));
        $hand->addCard(new Card("Spades", 5));

        $totalValue = $hand->totalValue();
        $this->assertEquals(15, $totalValue);
    }

    /**
     * Test calculating the total value of the hand with aces.
     */
    public function testTotalValueWithAces(): void
    {
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 1));
        $hand->addCard(new Card("Spades", 1));
        $hand->addCard(new Card("Diamonds", 9));

        $totalValue = $hand->totalValue();
        $this->assertEquals(21, $totalValue);

        // Test hand with ace that should count as 1
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 1));
        $hand->addCard(new Card("Spades", 9));
        $hand->addCard(new Card("Diamonds", 5));

        $totalValue = $hand->totalValue();
        $this->assertEquals(15, $totalValue);
    }
}
