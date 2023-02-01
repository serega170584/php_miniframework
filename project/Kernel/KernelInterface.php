<?php
declare(strict_types=1);

namespace Kernel;

use Request\Request;

interface KernelInterface
{
    public function handle(Request $request);
}