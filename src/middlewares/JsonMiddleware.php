<?php

namespace Nebula\Core\middlewares;

use Nebula\Core\Application;

class JsonMiddleware extends BaseMiddleware
{
    public function execute()
    {
        if ($_SERVER['HTTP_ACCEPT'] === 'application/json') {
            header('Content-Type: application/json');
        }
    }
}
