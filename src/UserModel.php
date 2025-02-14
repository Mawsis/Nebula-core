<?php

namespace Nebula\Core;

abstract class UserModel extends DbModel
{
    public abstract function getDisplayName(): string;
    public ?int $id;
}
