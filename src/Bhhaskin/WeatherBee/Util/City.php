<?php
namespace Bhhaskin\WeatherBee\Util;

use Bhhaskin\WeatherBee\Util\Location;

/**
 * Class for handling city
 */
class City extends Location
{
    /**
     * Name of the city.
     * @var string
     */
    public $name;

    /**
     * Name of the state the city is in.
     * @var string
     */
    public $state;

    /**
     * Name of the country the city is in.
     * @var [type]
     */
    public $country;

    /**
     * Creates city object.
     * @param string $name    Name of the city.
     * @param string $state   Name of state the city is in.
     * @param string $country Name of the country the city is in.
     * @param float  $lat     Latitude of city.
     * @param float  $lng     Longitude of city,
     */
    function __construct(
            string $name = null,
            string $state = null,
            string $country = null,
            float $lat = null,
            float $lng = null
        )
    {
        $this->name = $name;
        $this->state = $state;
        $this->country = $country;

        parent::__construct($lat, $lng);
    }
}
