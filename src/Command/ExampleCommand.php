<?php

namespace App\Command;

use App\Converter\CaloriesConverterInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    protected static $defaultName = 'app:example';

    /**
     * @var \App\Converter\CaloriesConverterInterface
     */
    private $converter;

    public function __construct(CaloriesConverterInterface $converter)
    {
        $this->converter = $converter;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        dump(get_class($this->converter));

        return Command::SUCCESS;
    }
}
