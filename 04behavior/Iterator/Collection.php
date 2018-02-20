<?php 
namespace behavior\Iterator;

class Collection
{
    public $data;
    /**
     * Collection constructeur
     * 
     * @param $params
     */
    public function __construct(array $params)
    {
        $this->data = $params;
    }
}