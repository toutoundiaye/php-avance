<?php 
namespace structural\Adapter;

require __DIR__.'/../../vendor/autoload.php';


$customer = new Customer();
$cap = new CapProductAdapter();
$customer->buy($cap);