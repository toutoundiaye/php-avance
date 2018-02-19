<?php 

namespace Instanciation\Builder;

class FormBuilder
{
    private $form;

    public function __construct()
    {
        $this->form = new Form();
    }

    public function add($string): FormBuilder
    {
        $this->form->addField(new Field($string));
        return $this;
    }
    
    public function createForm(): Form
    {
        return $this->form;
    }
}