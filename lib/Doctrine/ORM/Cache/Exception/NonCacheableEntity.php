<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache\Exception;

use function sprintf;

class NonCacheableEntity extends \Exception implements CacheException
{
    public static function fromEntity(string $entityName) : self
    {
        return new self(sprintf(
            'Entity "%s" not configured as part of the second-level cache.',
            $entityName
        ));
    }
}
