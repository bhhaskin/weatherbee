<?php
namespace Bhhaskin\WeatherBee;

use Bhhaskin\WeatherBee\Util\{City, Temperature, Weather, Wind};

/**
 * Class for Current Weather
 */
class CurrentWeather
{
    /**
     * Current Weather's city.
     * @var City
     */
    public $city;

    /**
     * Current Weather's temperature.
     * @var Temperature
     */
    public $temperature;

    /**
     * Current Weather's weather.
     * @var Weather
     */
    public $weather;

    /**
     * Current Weather's wind.
     * @var Wind
     */
    public $wind;

    /**
     * Last update of current weather
     * @var \DateTime
     */
    public $lastUpdate;

    /**
     * Creates Current Weather Object
     * @param City        $city        Current Weather's city.
     * @param Temperature $temperature Current Weather's temperature.
     * @param Weather     $weather     Current Weather's weather.
     * @param Wind        $wind        Current Weather's wind.
     */
    public function __construct(City $city, Temperature $temperature, Weather $weather, Wind $wind, \DateTime $lastUpdated)
    {
        $this->city = $city;
        $this->temperature = $temperature;
        $this->weather = $weather;
        $this->wind = $wind;
        $this->lastUpdated = $lastUpdated;
    }
}
