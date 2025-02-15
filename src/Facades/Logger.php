<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Logger extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'logger';
    }
}
