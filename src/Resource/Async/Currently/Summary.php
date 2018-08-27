<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource\Async\Currently;

use ApiClients\Foundation\Resource\AbstractResource;

class Summary extends AbstractResource {

  private $summary;

  /**
   * @return mixed
   */
  public function getSummary() {
    return $this->summary;
  }

  /**
   * @param mixed $summary
   */
  public function setSummary($summary): void {
    $this->summary = $summary;
  }


}