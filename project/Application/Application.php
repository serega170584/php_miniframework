<?php
declare(strict_types=1);

namespace Application;

use Kernel\KernelInterface;

class Application
{
    public function make(string $kernelClass): void
    {
        var_dump(class_implements($kernelClass));
    }
}

$app = new Application();
$app->make(\Kernel\KernelInterface::class);