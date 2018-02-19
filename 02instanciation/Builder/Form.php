<?php 
namespace Instanciation\Builder;

class Form
{ 
    private $fields = []; 
    private $locked = false;

    public function addField(Field $field)
    {
        if ($this->locked) {
            throw new \Exception('You cannot alter a form already build');
        }
        $this->fields[] = $field;
    }

    public function lock()
    {
        $this->locked = true;
    }
   
}