<?php

$message = 'message très très secret';

//print_r(openssl_get_cipher_methods());

$keyPair = openssl_pkey_new();



$details = openssl_pkey_get_details($keyPair);

//var_dump($details);

//openssl_pkey_get_public($keyPair)

openssl_public_encrypt($message, $cryptedMessage, $details['key']);

echo $cryptedMessage . "\n";

openssl_pkey_export($keyPair, $privateKey);

openssl_private_decrypt($cryptedMessage, $decryptMessage, $privateKey);

echo $decryptMessage . "\n";