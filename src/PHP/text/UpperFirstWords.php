<?php

namespace ziya\elephant\PHP\text;

use ziya\Elephant\PHP\ScalarString;
use function ucwords;

class UpperFirstWords implements ScalarString
{
    /**
     * @var string
     */
    private $value;

    /**
     * UpperFirstWords constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = ucwords($value);
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function value(): string
    {
        return $this->value;
    }
}