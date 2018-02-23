<?php

//ne pas faire, c'est le client qui décide
//ce qu'il y a dans les super globales
include 'lib/' .$_GET['module'].'php';

//une correction
$moduleWhiteList = ['human-resources', 'commercial'];
$moduleName = trim($_GET['module']);
if (!in_array($moduleName, $moduleWhiteList))
{
    throw new Exception();
}