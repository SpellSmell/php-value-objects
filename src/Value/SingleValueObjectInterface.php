<?php

namespace SolidPhp\ValueObjects\Value;

/**
 * Interface SingleValueObjectInterface
 *
 * This interface specifies that the implementing class can be used as an object that contains a single value.
 *
 * The interface defines a single factory method `of`, to create the value object from a scalar representation.
 * Any validation is expected to be done in the constructor.
 * The interface also defines the `__toString` method, which the implementing class should use to return the
 * string representation of an instance.
 * Lastly, the interface defines a `getValue` method, which the implementing class should use to return the plain
 * value.
 *
 * The best way to fulfill the contract for this interface is to use the SingleValueObjectTrait, which implements
 * all these methods for you.
 *
 * @see SingleValueObjectTrait
 */
interface SingleValueObjectInterface
{
    /**
     * @param string|int|float|bool $rawValue
     *
     * @return self
     */
    public static function of($rawValue);

    /**
     * @return string|int|float|bool
     */
    public function getValue();

    public function __toString(): string;

    public function toArray(): array;
}
