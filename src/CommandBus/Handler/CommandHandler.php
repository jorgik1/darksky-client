<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\CommandBus\Handler;

use ApiClients\Client\DarkSkyClient\CommandBus\Command\Command;
use ApiClients\Client\DarkSkyClient\Resource\AbstractResponse;
use ApiClients\Client\DarkSkyClient\Resource\ResponseInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Client\DarkSkyClient\Resource\Async\CurrentlyInterface;
use React\Promise\PromiseInterface;

final class CommandHandler
{

    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * Fetch the given repository and hydrate it
     *
     * @param Command $command
     *
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->service->fetch(
            $command->getLocation(),
            '',
            ResponseInterface::HYDRATE_CLASS
        );
    }
}