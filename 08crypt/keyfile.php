<?php

$message = 'message très très secret';

$keyStream = file_get_contents('demo.rsa');

// ne pas versionner les éléments confidentiels dans un vrai projet
$keyPair = openssl_get_privatekey($keyStream, 'passphrase');

openssl_pkey_export($keyPair, $privateKey);
$details = openssl_pkey_get_details($keyPair);

openssl_private_encrypt($message, $cryptedMessage, $privateKey);

echo $cryptedMessage . "\n";

openssl_pkey_export($keyPair, $privateKey);

openssl_public_decrypt($cryptedMessage, $decryptMessage, $details['key']);

echo $decryptMessage . "\n";