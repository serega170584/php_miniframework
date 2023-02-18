<?php

declare(strict_types=1);

namespace Services;

class Source implements SourceInterface
{
    private array $data = [];

    public function getData(): array
    {
        return $this->data;
    }

    public function changeSource(): void
    {
        $count = $this->data['count'] ?? 0;
        printf(" %d ", $count);
        $this->data['count'] = (++$count === 10) ? 0 : $count;
        printf(" %d ", $this->data['count']);
    }
}