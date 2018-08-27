<?php

use ApiClients\Client\DarkSkyClient\AsyncClient;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$loop = Factory::create();
$latitude = '37.8267';
$longitude = '-122.4233';
$client = AsyncClient::create($loop, require 'resolve_token.php');
$client->fetch( $latitude, $longitude)
  ->done(function (ApiClients\Client\DarkSkyClient\Resource\ResponseInterface $response) {
    resource_pretty_print($response);
  });
$loop->run();