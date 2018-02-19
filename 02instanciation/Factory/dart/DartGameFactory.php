<?php

namespace Instanciation\Factory\dart;

class DartGameFactory
{
    /**
    * DartGameFactory constructor.
    */
    public function __construct()
    {    
    }
    
    public static function create($string): DartGame
    {
        return new CricketGame(); 
    }
}