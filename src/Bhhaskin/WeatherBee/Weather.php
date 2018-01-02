<?php
namespace Bhhaskin\WeatherBee;

use Bhhaskin\WeatherBee\Backend\{Backend, WeatherGov};
/**
 * Main Weather Class.
 */
class Weather
{

    public $backend;

    function __construct(Backend $backend = null)
    {
        if (empty($backend)) {
            $backend = new WeatherGov();
        }

        $this->backend = $backend;
    }

    public function current(float $lat, float $lng)
    {
        return $this->backend->current($lat, $lng);
    }
}
