<?php
declare(strict_types=1);

namespace Services;

class Mail2 implements MailInterface
{
    public function send(): void
    {
        printf('mail 2');
    }
}
