<?php

namespace Nebula\Core\Validation;

use Nebula\Core\BaseValidation;

class MinValidation extends BaseValidation
{
    private $min;

    public function __construct($min)
    {
        $this->min = $min;
    }
    public function validate($value): bool
    {
        return strlen($value) >= $this->min;
    }

    public function getErrorMessage($attribute = ""): string
    {
        return "The $attribute must be at least $this->min characters";
    }
}
