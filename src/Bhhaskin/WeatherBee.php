<?php
namespace Bhhaskin;

use Bhhaskin\WeatherBee\Backend\{Backend, WeatherGov};

/**
 * Main Weather Class.
 */
class WeatherBee
{

    public $backend;

    public function __construct(Backend $backend = null)
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

    public function forecast(float $lat, float $lng)
    {
        return $this->backend->forecast($lat, $lng);
    }
}
