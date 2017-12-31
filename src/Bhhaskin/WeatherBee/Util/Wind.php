<?php
namespace Bhhaskin\WeatherBee\Util;

use Bhhaskin\WeatherBee\Util\Unit;

/**
 * Class of handling wind.
 */
class wind
{
    /**
     * Wind speed.
     * @var Unit
     */
    public $speed;

    /**
     * Wind direction.
     * @var string
     */
    public $direction;

    /**
     * Create Wind object.
     * @param Unit   $speed     Wind speed.
     * @param string $direction Wind direction
     */
    public function __construct(Unit $speed, string $direction)
    {
        $this->speed = $speed;
        $this->direction = $direction;
    }
}
