# Darksky
![](https://sonarcloud.io/api/project_badges/measure?project=jorgik1_darksky-client&metric=alert_status)

A simple async client for <a href=https://darksky.net>Dark Sky API</a>

## Server Requirements
- PHP >= 7.1

## Install
- Get the API key from https://darksky.net/dev
- Install this package in your project:<br> `composer require api-client-darsky/darksky-client`

## Quickstart example

Once [installed](#install), you can use the following code to access a
api server and get some weather data:

```php
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
```

See also the [examples](examples).
