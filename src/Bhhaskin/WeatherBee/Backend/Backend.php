<?php
namespace Bhhaskin\WeatherBee\Backend;

/**
 * Class for creating backends
 */
abstract class backend
{
    const USERAGENT = 'WeatherBee/0.1';

    abstract public function current(float $lat, float $lng);
    abstract public function forcast(float $lat, float $lng);
}
