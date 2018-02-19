<?php 
namespace Instanciation\Builder;

require __DIR__.'/../../vendor/autoload.php';

$builder = new FormBuilder();
$loginForm = $builder->add('username')
                     ->add('password')
                     ->add('not-a-robot')
                     ->createForm();
$builder->add('injection');

var_dump($loginForm);