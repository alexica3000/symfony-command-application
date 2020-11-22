<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ConvertString extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
            ->setName('convert_string')
            ->setDescription('convert strings odd/even')
            ->addArgument('string', InputArgument::REQUIRED, 'String what which will be modified.')
            ->addOption('first', null, InputOption::VALUE_OPTIONAL, 'First or not?', false)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resultArray = str_split($input->getArgument('string'));
        $optionValue = $input->getOption('first') === false ? false : true;
        $result = "";

        foreach($resultArray as $key => $item) {
            $result .= $key % 2 == $optionValue ? strtoupper($item) : strtolower($item);
        }

        $output->writeln($result);

        return Command::SUCCESS;
    }
}
