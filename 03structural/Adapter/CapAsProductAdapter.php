<?php
namespace structural\Adapter;

class CapAsProductAdapter implements Product
{
    private $cap;
    /**
     * capProductAdapter constructor
    */

    public function __construct(){
         $this->cap = new Cap();
    }

    public function getPrice(): int
    {
        return $this->cap->getValue();
    }
}