<?php 
namespace structural\Proxy;

require __DIR__.'/../../vendor/autoload.php';

$proxy = new RepositoryProxy('article');

echo (new \DateTime())->format('c') . "\n";
$proxy->getList();
echo (new \DateTime())->format('c') . "\n";
$proxy->getList();
echo (new \DateTime())->format('c') . "\n";
$proxy->getList();
echo (new \DateTime())->format('c') . "\n";
$proxy->getList();
echo (new \DateTime())->format('c') . "\n";
$proxy->getList();
echo (new \DateTime())->format('c') . "\n";