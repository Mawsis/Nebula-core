<?php

namespace Nebula\Core\Exceptions;

use Exception;

class ForbiddenException extends Exception
{
    protected $message = "You dont have permission to access this page";
    protected $code = 403;
}
