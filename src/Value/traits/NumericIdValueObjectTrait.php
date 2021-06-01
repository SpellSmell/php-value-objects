<?php

namespace SolidPhp\ValueObjects\Value\traits;

use SolidPhp\ValueObjects\Value\SingleValueObjectTrait;

/**
 * Trait NumericIdValueObjectTrait
 *
 * Обёртка над SingleValueObjectTrait с более строгим контрактом
 */
trait NumericIdValueObjectTrait
{
    use SingleValueObjectTrait;

    protected static $exceptionMessage = 'Значение NumericIdValueObject должно быть только положительным целым числом';

    final public function getValue(): int
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    protected static function validateRawValue(int $rawValue): void
    {
        if ($rawValue <= 0) {
            throw new \InvalidArgumentException(self::$exceptionMessage);
        }
    }
}
