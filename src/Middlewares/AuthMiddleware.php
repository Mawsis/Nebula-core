<?php

namespace Nebula\Core\Middlewares;

use Nebula\Core\Application;
use Nebula\Core\Exceptions\ForbiddenException;
use Nebula\Core\Exceptions\UnauthorizedException;
use Nebula\Core\Facades\Auth;

class AuthMiddleware extends BaseMiddleware
{
    public function execute()
    {
        if (Auth::isGuest()) {
            throw new UnauthorizedException;
        }
    }
}
