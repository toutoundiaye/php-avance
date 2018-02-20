<?php

$message = 'Mon mot de passe est <<invalide>>! purée ça marche';
//var_dump(openssl_get_cipher_methods());
$keyPair = openssl_pkey_new();
$details = openssl_pkey_get_details($keyPair);

$cryptedMessage = openssl_encrypt($message, 'aes-256-ecb', $details['key']);
echo $cryptedMessage."\n";

$decryptedMessage = openssl_decrypt($cryptedMessage, 'aes-256-ecb', $details['key']);
echo $decryptedMessage."\n";