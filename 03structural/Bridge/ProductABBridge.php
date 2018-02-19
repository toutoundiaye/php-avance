<?php 
namespace structural\Bridge;

class ProductABBridge
{

    public function createB(ProductA $a): ProductB
    {
        return new ProductB($a->getName());
    }
}
