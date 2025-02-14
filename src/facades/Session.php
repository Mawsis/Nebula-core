<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class Session extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'session';
    }
}
