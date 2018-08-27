<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource\Async;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use React\HttpClient\Response;

/**
 * @Nested(
 *     response="Currently",
 *     time="Currently\Time",
 *     summary="Currently\Summary"
 * )
 * @EmptyResource("EmptyResponse")
 */
class Currently extends AbstractResource implements CurrentlyInterface {

  protected $time;

  protected $summary;

  protected $icon;

  protected $nearestStormDistance;

  protected $nearestStormBearing;

  protected $temperature;

  protected $apparentTemperature;

  protected $pressure;

  protected $windSpeed;

  protected $cloudCover;


  /**
   * @return \ApiClients\Client\DarkSkyClient\Resource\Async\Time
   */
  public function time(): Time {
    return $this->time;
  }

  /**
   * @return Currently\Summary
   */
  public function summary(): Currently\Summary {
    return $this->summary;
  }

  public function icon(): string {
    return $this->icon;
  }

  public function nearestStormDistance(): int {
    return $this->nearestStormDistance;
  }

  public function nearestStormBearing(): int {
    $this->nearestStormBearing;
  }

  public function temperature(): int {
    return $this->temperature;
  }

  public function apparentTemperature(): int {
    return $this->apparentTemperature;
  }

  public function pressure(): int {
    return $this->pressure;
  }

  public function windSpeed(): int {
    return $this->windSpeed;
  }

  public function cloudCover(): int {
    return $this->cloudCover;
  }

  /**
   * @return mixed
   */
  public function getIcon() {
    return $this->icon;
  }

}
