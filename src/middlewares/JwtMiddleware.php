<?php

namespace Nebula\Core\middlewares;

use Nebula\Core\helpers\JwtHelper;
use Nebula\Core\Request;
use Nebula\Core\Response;

class JwtMiddleware extends BaseMiddleware
{
    public function execute()
    {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            throw new \Nebula\Core\exceptions\UnauthorizedException();
        }

        $token = str_replace('Bearer ', '', $headers['Authorization']);
        $decoded = JwtHelper::verifyToken($token);

        if (!$decoded) {
            throw new \Nebula\Core\exceptions\UnauthorizedException();
        }

        // Attach user to request
        // $user = User::findOne(['id' => $decoded->sub]);
        // if (!$user) {
        //     throw new \Nebula\Core\exceptions\UnauthorizedException();
        // }

        // $_SESSION['user'] = $user->id;
    }
}