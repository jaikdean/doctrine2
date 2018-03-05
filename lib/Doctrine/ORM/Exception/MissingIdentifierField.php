<?php

declare(strict_types=1);

namespace Doctrine\ORM\Exception;

use function sprintf;

final class MissingIdentifierField extends \Exception implements ManagerException
{
    public static function fromFieldAndClass($fieldName, $className) : self
    {
        return new self(sprintf(
            'The identifier %s is missing for a query of %s',
            $fieldName,
            $className
        ));
    }
}
