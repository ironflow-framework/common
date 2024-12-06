<?php

namespace TinyForge\Common;

use Dotenv\Dotenv;

class Env
{
    public static function load(string $path): void
    {
        $dotenv = Dotenv::createImmutable($path);
        $dotenv->load();
    }

    public static function get(string $key, $default = null)
    {
        return $_ENV[$key] ?? $default;
    }
}
