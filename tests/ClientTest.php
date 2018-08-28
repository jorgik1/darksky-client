<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\DarkSkyClient;

use ApiClients\Client\DarkSkyClient\Client;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;

class ClientTest extends TestCase
{
    public function testCreate()
    {
        $client = new Client('');
        self::assertInstanceOf(Client::class, $client);
    }

}
