<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Di\Annotation;

abstract class AbstractAnnotation implements AnnotationInterface
{
    /**
     * @var array
     */
    public $value;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public function collect(string $className, ?string $target): void
    {
        if (isset($this->value)) {
            AnnotationCollector::collectClass($className, static::class, $this->value);
        }
    }
}