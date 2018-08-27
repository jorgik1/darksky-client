<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource\Async;

use ApiClients\Foundation\Resource\AbstractResource;

class Time extends AbstractResource {

  private $time;

  /**
   * @return mixed
   */
  public function getTime() {
    return $this->time;
  }

  /**
   * @param mixed $time
   */
  public function setTime($time): void {
    $this->time = $time;
  }

}