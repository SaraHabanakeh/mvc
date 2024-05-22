<?php

namespace App\Dice;

class Dice
{
    /**
     * @var int|null
     */
    protected ?int $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function roll(): int
    {
        $this->value = random_int(1, 6);
        return $this->value;
    }

    public function getValue(): int
    {
        if ($this->value === null) {
            throw new \LogicException("Dice value has not been set. Roll the dice first.");
        }
        return $this->value;
    }

    public function getAsString(): string
    {
        return $this->value !== null ? "[{$this->value}]" : "[ ]";
    }
}
