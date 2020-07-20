<?php

declare(strict_types=1);

namespace App\Converter;

class KiloUnitsConverter #implements CaloriesConverterInterface
{
    protected const WATT_HOUR = '0.00000116222';

    protected const JOULE = '0.004184';

    public function toWattHours(int $calories): float
    {
        return $calories * self::WATT_HOUR;
    }

    public function toJoules(int $calories): float
    {
        return $calories * self::JOULE;
    }
}
