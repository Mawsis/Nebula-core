<?php

namespace Nebula\Core\Exceptions;

use Exception;

class DatabaseException extends Exception
{
    protected $message = "Database Error";
    protected $code = 500;
}
