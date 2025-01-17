<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Di\Exception;

use Hyperf\Di\Definition\DefinitionInterface;

class InvalidDefinitionException extends Exception
{
    public static function create(DefinitionInterface $definition, string $message, \Exception $previous = null): self
    {
        return new self(sprintf('%s' . PHP_EOL . 'Full definition:' . PHP_EOL . '%s', $message, (string) $definition), 0, $previous);
    }
}
