<?php

namespace App\Twig;

use App\Converter\CaloriesConverterInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    /**
     * @var \App\Converter\CaloriesConverterInterface
     */
    private $caloriesConverter;

    public function __construct(CaloriesConverterInterface $caloriesConverter)
    {
        $this->caloriesConverter = $caloriesConverter;
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
        return $this->caloriesConverter->toJoules($calories);
    }

    public function convertToWatts(string $calories): float
    {
        return $this->caloriesConverter->toWattHours($calories);
    }
}
