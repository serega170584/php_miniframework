<?php
declare(strict_types=1);

$dirname = dir(__DIR__);

spl_autoload_register(function(string $class) use ($dirname) {
    require_once $dirname->path . '/' . str_replace('\\', '/', $class) . '.php';
});
