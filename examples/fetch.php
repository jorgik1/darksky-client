<?php
use ApiClients\Client\DarkSkyClient\Client;
use function ApiClients\Foundation\resource_pretty_print;
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$latitude = '37.8267';
$longitude = '-122.4233';

$client = new Client(require 'resolve_token.php');
resource_pretty_print($client->fetch($latitude, $longitude));