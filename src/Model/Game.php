<?php declare(strict_types = 1);

namespace Game\Model;

use Symfony\Component\Console\Output\OutputInterface;

class Game
{
    private Gladiator $warrior1;
    private Gladiator $warrior2;
    private int $numberOfRounds;
    private OutputInterface $output;

    public function __construct(Gladiator $warrior1, Gladiator $warrior2, int $numberOfRounds, OutputInterface $output)
    {
        $this->warrior1 = $warrior1;
        $this->warrior2 = $warrior2;
        $this->numberOfRounds = $numberOfRounds;
        $this->output = $output;
    }

    public function run(): void
    {
    }

    private function playRound(int $i): void
    {
    }
}
