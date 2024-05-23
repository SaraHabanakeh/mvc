<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

class CoinGraphicTest extends TestCase
{
    /**
     * Test get graphic represantion
     */

    public function testGetGraphicRepresentation(): void
    {
        $coinGraphic = new CoinGraphic(5);
        $this->assertEquals('🪙🪙🪙🪙🪙', $coinGraphic->getGraphicRepresentation(), "Graphic representation should match the balance.");

    }

}
