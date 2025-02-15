<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Handler extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'handler';
    }
}
