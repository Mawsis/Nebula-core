<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class Auth extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'auth';
    }
}
