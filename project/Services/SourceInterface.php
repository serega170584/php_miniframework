<?php
declare(strict_types=1);

namespace Services;

interface SourceInterface
{
    public function getData(): array;

    public function changeSource(): void;
}
