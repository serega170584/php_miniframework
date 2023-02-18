<?php
declare(strict_types=1);

namespace Services;

class Sender
{
    private Mail1 $mail1;

    private Mail2 $mail2;

    private MailDefinerInterface $mailDefiner;

    private SourceInterface $source;

    public function __construct(Mail1 $mail1, Mail2 $mail2, MailDefinerInterface $mailDefiner, SourceInterface $source)
    {
        $this->mail1 = $mail1;
        $this->mail2 = $mail2;
        $this->mailDefiner = $mailDefiner;
        $this->source = $source;
    }
    public function send(): void
    {
        if ($this->mailDefiner->isMail1()) {
            $this->mail1->send();
        } else {
            $this->mail2->send();
        }
        $this->source->changeSource();
    }
}
