<?php
namespace Bhhaskin\WeatherBee\Util;

/**
 * Class for handling location
 */
class location
{

    /**
     * Latitude of location.
     * @var float
     */
    public $lat;

    /**
     * Longitude of location.
     * @var float
     */
    public $lng;

    /**
     * Creates location object.
     * @param float $lat Latitude of location.
     * @param float $lng Longitude of location.
     */
    function __construct(float $lat = null, float $lng = null)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }
}
