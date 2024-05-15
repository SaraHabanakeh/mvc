<?php

//namespace App\Dice;:
//Denna rad deklarerar att klassen DiceHand tillhör namespace App\Dice.
// Detta hjälper till att organisera klasser i olika namnområden för att undvika konflikter med klassnamn.

namespace App\Dice;

// Denna rad importerar klassen Dice från namespace App\Dice
use App\Dice\Dice;

class DiceHand
{
    private $hand = [];

    public function add(Dice $die): void
    {
        $this->hand[] = $die;
    }

    public function roll(): void
    {
        foreach ($this->hand as $die) {
            $die->roll();
        }
    }

    public function getNumberDices(): int
    {
        return count($this->hand);
    }

    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $die) {
            $values[] = $die->getValue();
        }
        return $values;
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $die) {
            $values[] = $die->getAsString();
        }
        return $values;
    }
}
