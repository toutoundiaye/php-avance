<?php

$message = 'Mon mot de passe est «invalide»';

$message2= '
https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation
IV: vecteur d initialisation: suite de nombres aléatoires, ne doit être utilisé qu une fois 
cipher: AES = le meilleur, BF (Blowfish): très bon, mais block de seulement 64bits
key-size:  128, 192, 256: plus longue meilleure mais plus couteuse, 128 déjà très bon
mode: 
 - ECB: electronic Codebook, chiffre chaque bloc indépendant de la même manière: bof
 - CBC: Cypher Block Chaining, nécessite un IV
 - CFB: Cypher feedback:  
 - OFB: Output Feedback: 
';

$password = 'invalide';
$cipher = 'aes-256-cfb';
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

$cryptedMessage = openssl_encrypt($message2, $cipher, $password, 0, $iv);

echo $cryptedMessage . "\n";

$decryptMessage = openssl_decrypt($cryptedMessage, $cipher, $password, 0, $iv);

echo $decryptMessage . "\n";