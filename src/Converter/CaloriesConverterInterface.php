<?php

namespace App\Converter;

interface CaloriesConverterInterface
{
    public function toWattHours(int $calories): float;

    public function toJoules(int $calories): float;
}
