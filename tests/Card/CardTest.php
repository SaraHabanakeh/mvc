<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties.
     */
    public function testCreateCard(): void
    {

        $card = new Card("Heart", 2);
        $this->assertInstanceOf(Card::class, $card);

        $suit = $card->getSuit();
        $exp = "Heart";
        $this->assertEquals($exp, $suit);

        $value = $card->getValue();
        $this->assertEquals(2, $value);

        $cardValue = $card->cardValue();
        $this->assertEquals(2, $cardValue);


        $card2 = new Card("Heart", 11);
        $cardValue = $card2->cardValue();
        $this->assertEquals(10, $cardValue);

        $res = $card->getAsString();
        $exp = "2 of Heart";
        $this->assertEquals($exp, $res);
    }


}
