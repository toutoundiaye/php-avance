<?php

$password = 'secret';
$password1 = 'famous';

//historiquement mais très mauvais
$badHash = md5($password);

//beaucoup mieux
$goodHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 7]);

//mot de passe identique pour plusieurs utilisateurs
$sql = 'SELECT password, count(id) as nb FROM user GROUP BY password ORDER BY nb DESC';

//utilisation d'un sel
$credentials = [
    'password' =>'secret',
    'salt' => '4TsyNGgaAGdpvSDAV'
];

$averageHash = md5($credentials['password'].$credentials['salt']);
echo $badHash. "\n";
echo 'coucou'. "\n";
echo $goodHash. "\n";
echo 'coucou'. "\n";
echo $averageHash. "\n";

$checkedPassword = password_verify($password, $goodHash);
$checkedPassword1 = password_verify($password1, $goodHash);
echo $checkedPassword. "\n";
echo $checkedPassword1. "\n";
