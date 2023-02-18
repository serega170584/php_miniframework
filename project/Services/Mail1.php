<?php
declare(strict_types=1);

namespace Services;

class Mail1 implements MailInterface
{
    public function send(): void
    {
        printf('mail 1');
    }
}
