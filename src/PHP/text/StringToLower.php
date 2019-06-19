<?php


namespace ziya\Elephant\PHP\text;


use ziya\Elephant\PHP\ScalarString;
use function strtolower;

class StringToLower extends BaseString implements ScalarString
{

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = strtolower($value);
        $this->count = strlen($this->value);
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