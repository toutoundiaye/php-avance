<?php
namespace Instanciation\Factory;

class CricketGame implements DartGame
{
    public function __construct(
        PlayerCollection $players,
        Money $credit,
        string $variation,
        bool $doubleBullEye
    ){
        
    }
    public function throwDart(){
        
    }
}