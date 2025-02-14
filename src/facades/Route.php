<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class Route extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'route';
    }
}
