<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\DarkSkyClient\CommandBus\Handler\CommandHandler")
 */
final class Command {

  /**
   * @var string
   */
  private $latitude;

  /**
   * @var string
   */
  private $longitude;

  /**
   * @param string $latitude
   * @param string $longitude
   */
  public function __construct(string $latitude = '', string $longitude = '') {
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }

  /**
   * @return string
   */
  public function getLocation(): string {
    return $this->latitude . ',' . $this->longitude;
  }
}