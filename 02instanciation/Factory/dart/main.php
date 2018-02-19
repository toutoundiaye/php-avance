<?php

require __DIR__.'/../../vendor/autoload.php';

$dartGameFactory = new Instanciation\Factory\DartGameFactory();
$cricketGame = $dartGameFactory->create('cricket');
$cricketGame->throwDart(18);