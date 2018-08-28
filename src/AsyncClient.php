<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient;

use ApiClients\Client\DarkSkyClient\CommandBus\Command\Command;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;

final class AsyncClient implements AsyncClientInterface
{

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param LoopInterface $loop
     * @param string $token
     * @param array $options
     *
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        string $token,
        array $options = []
    ): self {
        $options = ApiSettings::getOptions($token, $options, 'Async');
        $client = Factory::create($loop, $options);
        return new self($client);
    }

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetch(string $latitude, string $longitude): PromiseInterface
    {
        return $this->client->handle(new Command($latitude, $longitude));
    }
}