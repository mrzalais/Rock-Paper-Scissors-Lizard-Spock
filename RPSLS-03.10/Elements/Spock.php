<?php


class Spock extends AbstractTool implements ElementInterface
{
    public array $beatable = [
        Scissors::class,
        Rock::class
    ];

    public function getName(): string
    {
        return __CLASS__;
    }
}
