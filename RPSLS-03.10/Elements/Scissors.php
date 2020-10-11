<?php


class Scissors extends AbstractTool implements ElementInterface
{
    public array $beatable = [
        Paper::class,
        Lizard::class
    ];

    public function getName(): string
    {
        return __CLASS__;
    }
}
