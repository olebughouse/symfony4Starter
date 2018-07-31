<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Gearman\GearmanWorker;

class addGearmanWorker extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('gearman:add-worker')

            // the short description shown while running "php bin/console list"
            ->setDescription('Adds a new gearman worker to the server.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to add a gearman worker to the server...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            '',
            'User Creator',
            '============',
            '',
        ]);
        echo("start\n");
        GearmanWorker::addWorker();
    }
}