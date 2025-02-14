<?php

namespace Nebula\Core\middlewares;

use Nebula\Core\Application;
use Nebula\Core\exceptions\ForbiddenException;
use Nebula\Core\exceptions\UnauthorizedException;
use Nebula\Core\facades\Auth;

class AuthMiddleware extends BaseMiddleware
{
    public function execute()
    {
        if (Auth::isGuest()) {
            throw new UnauthorizedException;
        }
    }
}
