<?php 
namespace structural\Adapter;

require __DIR__.'/../../vendor/autoload.php';

$customer = new Customer();
//CapAsProductAdapter reuse Cap Implementation
$cap = new CapAsProductAdapter();
$customer->buy($cap);

var_dump($customer);
