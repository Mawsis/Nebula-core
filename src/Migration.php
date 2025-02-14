<?php

namespace Nebula\Core;

abstract class Migration
{
    protected $db;
    abstract public function up();
    abstract public function down();
}
