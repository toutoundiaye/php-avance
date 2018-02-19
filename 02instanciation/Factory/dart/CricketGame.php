<?php
namespace Instanciation\Factory\dart;

class CricketGame implements DartGame
{
    public function __construct(
        PlayerCollection $players = null,
        Money $credit = null,
        string $variation = null,
        bool $doubleBullEye = null
    )
    {
        
    }

    public function throwDart(int $area)
    {
        if ($area >= 15) {
            echo "Bien joué";
        }
    }

    public function openArea()
    {

    }
}