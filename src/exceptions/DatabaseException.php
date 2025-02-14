<?php

namespace Nebula\Core\exceptions;

use Exception;

class DatabaseException extends Exception
{
    protected $message = "Database Error";
    protected $code = 500;
}
