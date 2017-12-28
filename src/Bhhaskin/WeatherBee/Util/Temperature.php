<?php
namespace Bhhaskin\WeatherBee\Util;

use Bhhaskin\WeatherBee\Util\Unit;

/**
* Class for handling temperature
*/
class Temperature
{
    /**
    * Current temperature.
    * @var Unit
    */
    public $now;

    /**
    * The minimal temperature.
    * @var Unit
    */
    public $min;

    /**
    * The maximal temperature.
    * @var Unit
    */
    public $max;

    /**
    * The day temperature.
    * Might be null.
    * @var Unit
    */
    public $day;

    /**
    * The morning temperature.
    * Might be null.
    * @var Unit
    */
    public $morning;

    /**
    * The evening temperature.
    * Might be null.
    * @var Unit
    */
    public $evening;

    /**
    * The night temperature.
    * Might be null.
    * @var Unit
    */
    public $night;

    /**
    * Get the current temperature as a formatted string with unit.
    * Unit will not be inlucded if Empty
    * @return string The temperature formatted string with unit.
    */
    public function __toString()
    {
        return $this->now->__toString();
    }

    /**
    * Creates new temperature object
    * @param Unit $now The current temperature.
    * @param Unit $min The minimal temperature.
    * @param Unit $max The maximal temperature.
    * @param Unit $day The day temperature. Might not be null.
    * @param Unit $morning The morning temperature. Might not be null.
    * @param Unit $evening The evening temperature. Might not be null.
    * @param Unit $night The night temperature. Might not be null.
    */
    function __construct(
        Unit $now,
        Unit $min,
        Unit $max,
        Unit $day = null,
        Unit $morning = null,
        Unit $evening = null,
        Unit $night = null
        )
        {
            $this->now = $now;
            $this->min = $min;
            $this->max = $max;
            $this->day = $day;
            $this->morning = $morning;
            $this->evening = $evening;
            $this->night = $night;
        }

        /**
        * Get the current temperature unit.
        * This also converts 'celsius' to 'C' and 'fahrenheit' to 'F'.
        * @return string The temperature unit.
        */
        public function getUnit(): ?string
        {
            return $this->now->getUnit();
        }

        /**
        * Get the current temperature value.
        * @return float The value
        */
        public function getValue(): float
        {
            return $this->now->getValue();
        }

        /**
        * Get the current temperature description.
        * @return string Value's description.
        */
        public function getDescription(): ?string
        {
            return $this->now->getDescription();
        }

        /**
        * Get the current temperature as a formatted string with unit.
        * @return string The current temperature as formatted string with unit.
        */
        public function getFormatted(): string
        {
            return $this->now->getFormatted();
        }
    }
