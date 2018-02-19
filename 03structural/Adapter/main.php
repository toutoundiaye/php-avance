<?php 
namespace structural\Adapter;

require __DIR__.'/../../vendor/autoload.php';

$customer = new Customer();
//CapAsProductAdapter reuse Cap Implementation
$cap = new CapProductAdapter();
$customer->buy($cap);