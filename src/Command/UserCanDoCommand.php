<?php

namespace App\Command;

use App\Models\User;
use App\Models\UserDevelop;
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
            ->setDescription('Look! What I can do!!!')
            ->setHelp('This command prints what the user can do');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = User::getUser($input->getArgument('position'));
        $output->writeln($user->can($input->getArgument('action')));
        return 1;
    }
}
