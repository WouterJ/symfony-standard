<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class GreetCommand extends Command
{
    public function configure()
    {
        $this->setName('demo:greet');
    }

    public function execute(InputInterface $i, OutputInterface $o)
    {
        $o->writeln('Hello World!');
    }
}
