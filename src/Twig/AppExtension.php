<?php

declare(strict_types=1);

namespace App\Twig;

use App\Converter\CaloriesConverterInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension #extends AbstractExtension
{
    /**
     * @var \App\Converter\CaloriesConverterInterface
     */
    private $baseCaloriesConverter;

    public function __construct(CaloriesConverterInterface $baseCaloriesConverter)
    {
        $this->baseCaloriesConverter = $baseCaloriesConverter;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('base_convert_joules', [$this, 'convertToJoules']),
            new TwigFilter('base_convert_watts', [$this, 'convertToWatts']),
        ];
    }

    public function convertToJoules(string $calories): float
    {
        return $this->baseCaloriesConverter->toJoules($calories);
    }

    public function convertToWatts(string $calories): float
    {
        return $this->baseCaloriesConverter->toWattHours($calories);
    }
}
