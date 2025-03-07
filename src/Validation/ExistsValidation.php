<?php

namespace Nebula\Core\Validation;

use Nebula\Core\BaseValidation;
use Nebula\Core\QueryBuilder;

class ExistsValidation extends BaseValidation
{
    private $table;
    private $attribute;

    public function __construct($table, $attribute)
    {
        $this->table = $table;
        $this->attribute = $attribute;
    }

    public function validate($value): bool
    {
        $record = (new QueryBuilder($this->table))->where($this->attribute, "=", $value)->first();
        return isset($record);
    }

    public function getErrorMessage($attribute = ""): string
    {
        return "$attribute does not exist";
    }
}
