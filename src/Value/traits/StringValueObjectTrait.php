<?php

namespace SolidPhp\ValueObjects\Value\traits;

use SolidPhp\ValueObjects\Value\SingleValueObjectTrait;

/**
 * Trait StringValueObjectTrait
 *
 * Обёртка над SingleValueObjectTrait с более строгим контрактом
 */
trait StringValueObjectTrait
{
    use SingleValueObjectTrait;

    final public function getValue(): string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    protected static function validateRawValue(string $rawValue): void
    {
    }
}
