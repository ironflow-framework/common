<?php

namespace TinyForge\Common;

class Config
{
    protected static array $config = [];

    public static function load(string $path): void
    {
        if (!file_exists($path)) {
            throw new \Exception("Config file not found at {$path}");
        }
        static::$config = require $path;
    }

    public static function get(string $key, $default = null)
    {
        $keys = explode('.', $key);
        $value = static::$config;

        foreach ($keys as $key) {
            if (!isset($value[$key])) {
                return $default;
            }
            $value = $value[$key];
        }

        return $value;
    }
}
