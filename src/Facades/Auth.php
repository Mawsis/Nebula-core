<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Auth extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'auth';
    }
}
