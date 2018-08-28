<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource\Async;

use ApiClients\Client\DarkSkyClient\Resource\Async\Currently\Summary;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CurrentlyInterface extends ResourceInterface
{

    public const HYDRATE_CLASS = 'Currently';

    public function time(): Time;

    public function summary(): Summary;

    public function icon(): string;

    public function nearestStormDistance(): int;

    public function nearestStormBearing(): int;

    public function temperature(): int;

    public function apparentTemperature(): int;

    public function pressure(): int;

    public function windSpeed(): int;

    public function cloudCover(): int;
}