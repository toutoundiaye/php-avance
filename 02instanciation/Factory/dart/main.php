<?php

require __DIR__.'/../../../vendor/autoload.php';
use Instanciation\Factory\dart\DartGameFactory;

/*$dartGameFactory = new DartGameFactory();
$cricketGame = $dartGameFactory->create('cricket');*/

//$cricketGame = new Instanciation\Factory\dart\CricketGame();

$cricketGame = DartGameFactory::create('cricket');
$cricketGame->throwDart(18);
var_dump($cricketGame);