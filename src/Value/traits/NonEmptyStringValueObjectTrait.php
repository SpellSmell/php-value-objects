<?php

namespace SolidPhp\ValueObjects\Value\traits;

use SolidPhp\ValueObjects\Value\SingleValueObjectTrait;

/**
 * Trait SingleValueObjectTrait
 *
 * Обёртка над SingleValueObjectTrait с более строгим контрактом
 */
trait NonEmptyStringValueObjectTrait
{
    use SingleValueObjectTrait;

    protected static $exceptionMessage = 'Значение StringValueObject должно быть только НЕ пустой строкой';

    final public function getValue(): string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    protected static function validateRawValue(string $rawValue): void
    {
        if (mb_strlen($rawValue) === 0) {
            throw new \InvalidArgumentException(self::$exceptionMessage);
        }
    }
}
