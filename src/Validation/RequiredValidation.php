<?php

namespace Nebula\Core\Validation;

use Nebula\Core\BaseValidation;

class RequiredValidation extends BaseValidation
{
    public function validate($value): bool
    {
        //validate for being required number or string or date whatever throw validation error otherwise
        return $value !== null && trim($value) !== '';
    }

    public function getErrorMessage($attribute = ""): string
    {
        return "The $attribute is required";
    }
}
