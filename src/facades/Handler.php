<?php

namespace Nebula\Core\facades;

use Nebula\Core\Container;

class Handler extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'handler';
    }
}
