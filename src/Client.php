<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient;

use ApiClients\Client\DarkSkyClient\Resource\Response;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use function Clue\React\Block\await;

final class Client {

  /**
   * @var LoopInterface
   */
  private $loop;

  /**
   * @var AsyncClient
   */
  private $client;

  public function __construct(string $token) {
    $this->loop = Factory::create();
    $this->client = AsyncClient::create($this->loop, $token);
  }

  /**
   * @param string $latitude
   * @param string $longitude
   *
   * @return
   * @throws \Exception
   */
  public function fetch(string $latitude, string $longitude) {
    return await(
      $this->client->fetch($latitude, $longitude),
      $this->loop
    );
  }

}