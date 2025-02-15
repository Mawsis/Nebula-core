<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Session extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'session';
    }
}
