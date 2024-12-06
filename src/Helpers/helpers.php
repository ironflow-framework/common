<?php

if (!function_exists('class_basename')) {
    function class_basename(string $class): string
    {
        return basename(str_replace('\\', '/', $class));
    }
}
