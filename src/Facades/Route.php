<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Route extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'route';
    }
}
