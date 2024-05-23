<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Player.
 */
class PlayerTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties.
     */
    public function testCreatePlayer(): void
    {
        $player = new Player("Sara Hab", 1);

        $this->assertEquals("Sara Hab", $player->getName());
        $this->assertInstanceOf(CardHand::class, $player->getHand());
        $this->assertEquals(1, $player->getBalance());
        $this->assertEquals('playing', $player->getStatus());
    }

    /**
     * Test to add card to the player hand.
     */
    public function testAddCardToHand(): void
    {
        $player = new Player("Sara Hab", 1);
        $card = new Card('hearts', 10);
        $player->addCard($card);

        $hand = $player->getHand();
        $this->assertCount(1, $hand->getCards());
        $this->assertSame($card, $hand->getCards()[0]);
    }

    /**
     * Test adjusting the player balance.
     */
    public function testAdjustBalance(): void
    {
        $player = new Player("Sara Hab", 100);
        $player->adjustBalance(50);

        $this->assertEquals(150, $player->getBalance());

        $player->adjustBalance(-30);
        $this->assertEquals(120, $player->getBalance());
    }

    /**
     * Test set status and get status.
     */
    public function testSetAndGetStatus(): void
    {
        $player = new Player("Sara Hab", 100);
        $player->setStatus('done');

        $this->assertEquals('done', $player->getStatus());
    }

    /**
     * Test get players hand value.
     */
    public function testHandValue(): void
    {
        $player = new Player("Sara Hab", 100);
        $card1 = new Card('hearts', 10);
        $card2 = new Card('spades', 5);

        $player->addCard($card1);
        $player->addCard($card2);

        $this->assertEquals(15, $player->getHandValue());
    }

    /**
     * Test isBusted method.
     */
    public function testIsBusted(): void
    {
        $player = new Player("Sara Hab");

        $card1 = new Card('hearts', 10);
        $card2 = new Card('spades', 10);
        $card3 = new Card('diamonds', 5);

        $player->addCard($card1);
        $player->addCard($card2);
        $player->addCard($card3);

        $this->assertTrue($player->isBusted());
    }

    /**
     * Test has blackjack method.
     */
    public function testHasBlackJack(): void
    {
        $player = new Player("Sara Hab");

        $card1 = new Card('hearts', 10);
        $card2 = new Card('spades', 1);

        $player->addCard($card1);
        $player->addCard($card2);

        $this->assertTrue($player->hasBlackJack());
    }


}
