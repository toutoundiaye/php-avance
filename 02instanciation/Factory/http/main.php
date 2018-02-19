<?php

require __DIR__ . '/../../../vendor/autoload.php';

$request = Instanciation\Factory\http\Request::createFromSuperGlobals();

echo $request->getQueryString();