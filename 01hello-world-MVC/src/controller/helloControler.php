<?php

require __DIR__.'/../../../vendor/autoload.php';

use Dawan\model\Hello;
use Dawan\view\Render;

use Symfony\Component\Debug\Debug;

Debug::enable();

$hello = new Hello();
$data = $hello->sayHello();

$view = new Render();
$result = $view->render($data);

echo $result ."\n";

