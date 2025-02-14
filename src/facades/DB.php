<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class DB extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'db';
    }
}
