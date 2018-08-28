<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyResponse")
 */
abstract class AbstractResponse extends AbstractResource implements ResponseInterface
{
    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var integer
     */
    public $offset;


    public function latitude(): string
    {
        return $this->latitude;
    }

    public function longitude(): string
    {
        return $this->longitude;
    }

    public function offset(): int
    {
        return $this->offset;
    }

    public function timezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }

}
