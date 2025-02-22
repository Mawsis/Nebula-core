<?php

namespace Nebula\Core\Facades;

use Nebula\Core\Container;

class Facade
{
    public static function __callStatic($name, $arguments)
    {
        return Container::make(static::getFacadeAccessor())->$name(...$arguments);
    }

    protected static function getFacadeAccessor()
    {
        throw new \RuntimeException('Facade does not implement getFacadeAccessor method.');
    }
}
