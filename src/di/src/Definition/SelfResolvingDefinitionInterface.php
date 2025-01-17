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

namespace Hyperf\Di\Definition;

use Psr\Container\ContainerInterface;

interface SelfResolvingDefinitionInterface
{
    /**
     * Resolve the definition and return the resulting value.
     */
    public function resolve(ContainerInterface $container);

    /**
     * Check if a definition can be resolved.
     */
    public function isResolvable(ContainerInterface $container): bool;
}
