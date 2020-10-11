<?php


class Lizard extends AbstractTool implements ElementInterface
{
    public array $beatable = [
        Spock::class,
        Paper::class
    ];

    public function getName(): string
    {
        return __CLASS__;
    }
}
