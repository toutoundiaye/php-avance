<?php
$client = new SoapClient('http://webservicex.net/geoipservice.asmx?WSDL');

$response = $client->GetGeoIP([
    'IPAddress' => '24.45.67.89',
]);

print_r($response);

echo $response->GetGeoIPResult->CountryName. "\n";