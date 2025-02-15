<?php

namespace Nebula\Core\Validation;

use Nebula\Core\BaseValidation;

class MaxValidation extends BaseValidation
{
    private $max;

    public function __construct($max)
    {
        $this->max = $max;
    }
    public function validate($value): bool
    {
        return strlen($value) <= $this->max;
    }

    public function getErrorMessage($attribute = ""): string
    {
        return "The $attribute must be at most $this->max characters";
    }
}
