<?php


class Paper extends AbstractTool implements ElementInterface
{
    public array $beatable = [
        Rock::class,
        Spock::class
    ];

    public function getName(): string
    {
        return __CLASS__;
    }
}
