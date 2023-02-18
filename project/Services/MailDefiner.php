<?php
declare(strict_types=1);

namespace Services;

class MailDefiner implements MailDefinerInterface
{
    private SourceInterface $source;

    private MailDefineStrategyInterface $mailDefineStrategy;

    public function __construct(SourceInterface $source, MailDefineStrategyInterface $mailDefineStrategy)
    {
        $this->source = $source;
        $this->mailDefineStrategy = $mailDefineStrategy;
    }

    public function isMail1(): bool
    {
        $data = $this->source->getData();
        return $this->mailDefineStrategy->isMail1($data);
    }
}
