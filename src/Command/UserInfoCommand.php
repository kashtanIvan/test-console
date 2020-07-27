<?php

namespace App\Command;

use App\Models\UserCreator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UserInfoCommand extends Command
{
    protected function configure()
    {
        $this->setName('user')
            ->addArgument('position', InputArgument::REQUIRED, 'User position')
            ->setDescription('Look! What I can do!!!')
            ->setHelp('This command prints what the user can do');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = UserCreator::getUser($input->getArgument('position'));
        $output->writeln($user->printActions());
        return self::SUCCESS;
    }
}
