<?php declare(strict_types=1);

use ApiClients\Foundation\Resource\ResourceInterface;

interface EmptyResponseInreface extends ResourceInterface {

  const HYDRATE_CLASS = 'EmptyResponse';

  public function timezone(): string;
}