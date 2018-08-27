<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource;

use ApiClients\Client\DarkSkyClient\Resource\Async\Currently;
use ApiClients\Foundation\Resource\ResourceInterface;

interface ResponseInterface extends ResourceInterface {


  public const HYDRATE_CLASS = 'BaseResponse';

  /**
   * @return string
   */
  public function latitude(): string;

  /**
   * @return string
   */
  public function longitude(): string;

  /**
   * @return string
   */
  public function timezone(): string;

  /**
   * @return int
   */
  public function offset(): int;

  /**
   * @return \ApiClients\Client\DarkSkyClient\Resource\Async\Currently
   */
  public function currently(): Currently;
}