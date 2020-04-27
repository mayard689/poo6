<?php


class Speedometer
{

    private const CONVERTER=0.621;

    public static function convertKmToMiles(float $kmLength) : float
    {
        return self::CONVERTER * $kmLength;
    }
}