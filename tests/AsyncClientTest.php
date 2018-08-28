<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\DarkSkyClient;

use ApiClients\Client\DarkSkyClient\AsyncClient;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;

final class AsyncClientTest extends TestCase
{

    public function testCreate()
    {
        $client = AsyncClient::create(Factory::create(), '');
        self::assertInstanceOf(AsyncClient::class, $client);
    }

}
