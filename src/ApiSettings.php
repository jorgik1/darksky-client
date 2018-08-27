<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\Json\JsonDecodeMiddleware;
use ApiClients\Middleware\Json\JsonEncodeMiddleware;
use function ApiClients\Foundation\options_merge;

final class ApiSettings {

  public const NAMESPACE = 'ApiClients\\Client\\DarkSkyClient\\Resource';

  public const TRANSPORT_OPTIONS = [
    FoundationOptions::HYDRATOR_OPTIONS => [
      HydratorOptions::NAMESPACE => self::NAMESPACE,
      HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
    ],
    FoundationOptions::TRANSPORT_OPTIONS => [
      TransportOptions::HOST => 'api.darksky.net/forecast',
      TransportOptions::MIDDLEWARE => [
        JsonDecodeMiddleware::class,
        JsonEncodeMiddleware::class
      ]
    ],
  ];

  public static function getOptions(
    string $token,
    array $suppliedOptions,
    string $suffix
  ): array {
    $options = options_merge(self::TRANSPORT_OPTIONS, $suppliedOptions);
    $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::PATH] = '/' . $token . '/';
    $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;
    return $options;
  }
}
