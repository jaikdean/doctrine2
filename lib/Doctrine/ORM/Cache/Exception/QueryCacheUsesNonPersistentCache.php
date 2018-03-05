<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Exception;

use Doctrine\Common\Cache\Cache;
use function get_class;

final class QueryCacheUsesNonPersistentCache extends \Exception implements CacheException
{
    public static function fromDriver(Cache $cache) : self
    {
        return new self(
            'Query Cache uses a non-persistent cache driver, ' . get_class($cache) . '.'
        );
    }
}
