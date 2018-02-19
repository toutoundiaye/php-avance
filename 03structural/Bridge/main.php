<?php 
namespace structural\Bridge;

require __DIR__.'/../../vendor/autoload.php';

//we know how to build productA
$a = new ProductA();

//we neeed a productB
$b = (new ProductABBridege())->createB($a);
var_dump($b);