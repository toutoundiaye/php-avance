<?php 

namespace Instanciation\Builder;

class Field
{
    private $name;

    public function __construct(string $name) 
    {
        $this->name = $name;
    }

    public function getName():string 
    {
        return $this->name;
    }
}