<?php

namespace Nebula\Core\exceptions;

use Exception;

class NotFoundException extends Exception
{
    protected $message = "Page Not Found";
    protected $code = 404;
}
