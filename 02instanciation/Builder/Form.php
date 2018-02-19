<?php 
namespace Instanciation\Builder;

class Form
{ 
    private $fields = []; 
    private $locked = false;

    public function addField(Field $field)
    {
        if ($this->locked){
            
        }
        return $this->fields[] = $field;
    }
   
}