<?php

namespace App\Command;

use App\Models\UserCreator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserCanDoCommand extends Command
{
    protected function configure()
    {
        $this->setName('can')
            ->addArgument('position', InputArgument::REQUIRED, 'User position')
            ->addArgument('action', InputArgument::REQUIRED, 'User action')
            ->setDescription('Check if the user can do the job what you want!')
            ->setHelp('This command checks if the user can do the job!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = UserCreator::getUser($input->getArgument('position'));
        $output->writeln($user->can($input->getArgument('action')));
        return self::SUCCESS;
    }
}
