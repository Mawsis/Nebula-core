<?php

namespace Nebula\Core\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    protected $message = "Unauthorized access";
    protected $code = 401;
}
