<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient;

use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;

interface AsyncClientInterface
{
    public static function create(LoopInterface $loop, string $token, array $options = []): AsyncClient;

    public function fetch(string $latitude, string $longitude): PromiseInterface;
}