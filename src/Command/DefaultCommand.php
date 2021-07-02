<?php

namespace App\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DefaultCommand extends Command
{
    protected static $defaultName = 'app:default';

    protected function configure(): void
    {
        $this
            ->setDescription('wrapper')
            ->setHidden(true)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): ?int
    {
        /** @var Application $application */
        $application = $this->getApplication();

        $command = $application->find('list');
        $arguments = ['namespace' => 'app'];

        $listInput = new ArrayInput($arguments);

        return $command->run($listInput, $output);
    }
}
