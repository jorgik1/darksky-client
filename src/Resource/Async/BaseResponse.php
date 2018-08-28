<?php declare(strict_types=1);

namespace ApiClients\Client\DarkSkyClient\Resource\Async;

use ApiClients\Client\DarkSkyClient\Resource\AbstractResponse;
use ApiClients\Client\DarkSkyClient\Resource\ResponseInterface;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;

/**
 * @Nested(
 *     response="BaseResponse",
 *     currently="Currently"
 * )
 * @EmptyResource("EmptyResponse")
 */
class BaseResponse extends AbstractResponse implements ResponseInterface
{

    /**
     * @var Currently
     */
    public $currently;

    /**
     * @return \ApiClients\Client\DarkSkyClient\Resource\Async\Currently
     */
    public function currently(): Currently
    {
        return $this->currently;
    }
}
