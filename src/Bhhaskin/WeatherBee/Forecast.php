<?php
namespace Bhhaskin\WeatherBee;

use Bhhaskin\WeatherBee\CurrentWeather;
use Bhhaskin\WeatherBee\Util\{City, Temperature, Weather, Wind, Time};

/**
 * Class for handling forcast
 */
class Forecast extends CurrentWeather
{

    /**
     * Time of the forecast
     * @var Time
     */
    public $time;

    /**
     * Creates forecast object.
     * @param City        $city        Forecast City.
     * @param Temperature $temperature ForeCast Temperature.
     * @param Weather     $weather     ForeCast Weather.
     * @param Wind        $wind        ForeCast Wind.
     * @param DateTime    $lastUpdated ForeCast Last updated.
     * @param Time        $time        Forecast time period.
     */
    public function __construct(City $city, Temperature $temperature, Weather $weather, Wind $wind, \DateTime $lastUpdated, Time $time)
    {
        $this->time = $time;
        parent::__construct($city, $temperature, $weather, $wind, $lastUpdated);
    }
}
