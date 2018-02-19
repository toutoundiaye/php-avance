<?php 
namespace structural\Bridge;

class ProductB
{

    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}