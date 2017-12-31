<?php
namespace Bhhaskin\WeatherBee\Util;

/**
 * Class for converting values
 */
class Convert
{

    /**
     * Converts celsius to fahrenheit.
     * @param  float $celsius Value to convert.
     * @return float          Converted value.
     */
    public static function toFahrenheit(float $celsius): float
    {
        return ($celsius * 1.8) + 32;
    }

    /**
     * Converts fahrenheit to celsius.
     * @param  float $fahrenheit Value to convert.
     * @return float             Converted value.
     */
    public static function toCelsius(float $fahrenheit): float
    {
        return ($fahrenheit - 32) / 1.8;
    }
}
