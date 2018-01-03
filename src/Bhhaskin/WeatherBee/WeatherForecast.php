<?php
namespace Bhhaskin\WeatherBee;

use Bhhaskin\WeatherBee\Forecast;
use Bhhaskin\WeatherBee\Util\City;

/**
* Class to handle Weather Forecast.
*/
class WeatherForecast implements \Iterator
{

    /**
     * Forecast City.
     * @var City
     */
    public $city;

    /**
     * Last updated
     * @var \DateTime
     */
    public $lastUpdate;

    /**
     * Array of Forecast Objects
     * @var array
     * @internal
     */
    private $forecassts;

    /**
     * Position of Iterator
     * @var int
     */
    private $position = 0;

    /**
     * Creates Weather Forecast object.
     * @param City     $city       Forecast City.
     * @param array    $forecasts  Array of forecast objects.
     * @param DateTime $lastUpdate Last updated.
     */
    public function __construct(City $city, array $forecasts, \DateTime $lastUpdate)
    {
        foreach ($forecasts as $forecast) {
            if (!is_a($forecasts, 'Forecast')) {
                throw new TypeError("Forecast object expected");
            }
        }
    }

    /**
    * @internal
    */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
    * @internal
    */
    public function current()
    {
        return $this->forecasts[$this->position];
    }

    /**
    * @internal
    */
    public function key()
    {
        return $this->position;
    }
    /**
    * @internal
    */
    public function next()
    {
        ++$this->position;
    }
    /**
    * @internal
    */
    public function valid()
    {
        return isset($this->forecasts[$this->position]);
    }

}
