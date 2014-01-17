<?php

namespace Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InteractiveGreetCommand extends Command {

    protected function configure() {
        $this
                ->setName('demo:greet-interactive')
                ->setDescription('Greet someone Interactively')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        
        $dialog = $this->getHelperSet()->get('dialog');
        
        $name = $dialog->ask(
                $output, 'Please enter your name: ', 'Pepe'
        );

        $output->writeln('<info>Hello ' . $name . '</info>');
    }

}

