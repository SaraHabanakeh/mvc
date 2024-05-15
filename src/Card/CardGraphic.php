<?php

namespace App\Card;

use App\Card\Card;

class CardGraphic extends Card
{
    private $representation = [

        'diamond' => [
            '1' => '🃁',
            '2' => '🃂',
            '3' => '🃃',
            '4' => '🃄',
            '5' => '🃅',
            '6' => '🃆',
            '7' => '🃇',
            '8' => '🃈',
            '9' => '🃉',
            '10' => '🃊',
            '11' => '🃋',
            '12' => '🃍',
            '13' => '🃎',
        ],

        'clover' => [
            '1' => '🃑',
            '2' => '🃒',
            '3' => '🃓',
            '4' => '🃔',
            '5' => '🃕',
            '6' => '🃖',
            '7' => '🃗',
            '8' => '🃘',
            '9' => '🃙',
            '10' => '🃚',
            '11' => '🃛',
            '12' => '🃝',
            '13' => '🃞',
        ],

        'heart' => [
            '1' => '🂱',
            '2' => '🂲',
            '3' => '🂳',
            '4' => '🂴',
            '5' => '🂵',
            '6' => '🂶',
            '7' => '🂷',
            '8' => '🂸',
            '9' => '🂹',
            '10' => '🂺',
            '11' => '🂻',
            '12' => '🂽',
            '13' => '🂾',
        ],

        'spades' => [
            '1' => '🂡',
            '2' => '🂢',
            '3' => '🂣',
            '4' => '🂤',
            '5' => '🂥',
            '6' => '🂦',
            '7' => '🂧',
            '8' => '🂨',
            '9' => '🂩',
            '10' => '🂪',
            '11' => '🂫',
            '12' => '🂭',
            '13' => '🂮',
        ],
    ];


    public function getAsString(): string
    {
        $suit = $this->getSuit();
        $value = $this->getValue();


        if (isset($this->representation[$suit][$value])) {
            return $this->representation[$suit][$value];
        } else {
            return 'Invalid card';
        }
    }

}
