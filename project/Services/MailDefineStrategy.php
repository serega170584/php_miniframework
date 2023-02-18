<?php

namespace Services;

class MailDefineStrategy implements MailDefineStrategyInterface
{
    public function isMail1(array $data): bool
    {
        $count = $data['count'] ?? NULL;
        return 9 === $count;
    }
}
