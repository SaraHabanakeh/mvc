<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardGraphicRepresentationTest extends TestCase
{
    /**
     * Test Card graphic Representation
     */
    public function testCardRepresentation(): void
    {

        $card = new CardGraphic('diamond', 1);
        $this->assertEquals('🃁', $card->getAsString());

        $card = new CardGraphic('clover', 13);
        $this->assertEquals('🃞', $card->getAsString());

        $card = new CardGraphic('heart', 5);
        $this->assertEquals('🂵', $card->getAsString());

        $card = new CardGraphic('spades', 11);
        $this->assertEquals('🂫', $card->getAsString());

        $card = new CardGraphic('invalid_suit', 20);
        $this->assertEquals('Invalid card', $card->getAsString());

    }

    /**
     * Test get suit class method
     */

    public function testGetSuitClass(): void
    {
        $card = new CardGraphic('diamond', 1);
        $this->assertEquals('diamond', $card->getSuitClass());

        $card = new CardGraphic('clover', 13);
        $this->assertEquals('clover', $card->getSuitClass());

        $card = new CardGraphic('heart', 5);
        $this->assertEquals('heart', $card->getSuitClass());

        $card = new CardGraphic('spades', 11);
        $this->assertEquals('spades', $card->getSuitClass());
    }

}
