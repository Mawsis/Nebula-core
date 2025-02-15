<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class DB extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'db';
    }
}
