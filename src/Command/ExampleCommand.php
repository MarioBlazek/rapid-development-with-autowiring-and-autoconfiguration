<?php

declare(strict_types=1);

namespace App\Command;

use App\Converter\CaloriesConverterInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use function get_class;
use function sprintf;

class ExampleCommand #extends Command
{
    protected static $defaultName = 'app:example';

    /**
     * @var \App\Converter\CaloriesConverterInterface
     */
    private $baseCaloriesConverter;

    public function __construct(CaloriesConverterInterface $baseCaloriesConverter)
    {
        $this->baseCaloriesConverter = $baseCaloriesConverter;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Converter implementation used: %s', get_class($this->baseCaloriesConverter)));

        return Command::SUCCESS;
    }
}
