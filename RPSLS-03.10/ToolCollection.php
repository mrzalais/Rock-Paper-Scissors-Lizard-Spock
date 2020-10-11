<?php

class ToolCollection
{
    private array $tools = [];

    public int $computerImg;

    public function addTool($tool): void
    {
        $this->tools[] = $tool;
    }

    public function allTools(): array
    {
        return $this->tools;
    }

    public function getPc(): ElementInterface
    {
        $pc = array_rand($this->tools);

        $this->computerImg = $pc;

        return ($this->tools[$pc]);
    }

    public function getUser($choice): ElementInterface
    {
        return $this->tools[(int)$choice];
    }

    public function getComputerImg(): int
    {
        return $this->computerImg;
    }
}
