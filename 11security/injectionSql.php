<?php

$sql = 'SELECT u.* FROM users u WHERE u.username ="toto" AND password="'.$_GET['pwd'].'"';
echo $sql ."\n";

//solution requete préparée
$smt = new PDO($dns, $username, $password);;
$smt->prepare('SELECT u.* FROM users u WHERE u.username =:username AND password=:password');
//$smt->bind_param("toto", $username; "admin", $password);
$smt->exec();