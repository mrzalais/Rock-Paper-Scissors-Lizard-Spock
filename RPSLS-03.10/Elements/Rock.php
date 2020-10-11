<?php


class Rock extends AbstractTool implements ElementInterface
{
    public array $beatable = [
        Scissors::class,
        Lizard::class
    ];

    public function getName(): string
    {
        return __CLASS__;
    }

}
