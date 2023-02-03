<?php
declare(strict_types=1);

require_once 'DI/Container.php';

$dirname = dir(__DIR__);

$container = new \DI\Container();

spl_autoload_register(function(string $class) use ($dirname, $container) {
    require_once $dirname->path . '/' . str_replace('\\', '/', $class) . '.php';
    $container->addToMap($class);
});

$container->generateDependencies();
