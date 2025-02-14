<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class Logger extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'logger';
    }
}
