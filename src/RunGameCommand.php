<?php declare(strict_types = 1);

namespace Game;

use Game\Model\Game;
use Game\Model\Gladiator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class RunGameCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('game:run');
        $this->setDescription('Execute this command to start a game.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $warrior1 = new Gladiator();
        $warrior2 = new Gladiator();

        $game = new Game($warrior1, $warrior2, 10, $output);
        $game->run();

        return 0;
    }
}
