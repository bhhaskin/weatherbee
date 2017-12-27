<?php
namespace Bhhaskin\WeatherBee\Util;

/**
*
*/
class Unit
{
    /**
    * The value
    * @var float
    * @internal
    */
    private $value;

    /**
    * The value's unit
    * @var string
    * @internal
    */
    private $unit;

    /**
    * The value's description
    * @var string
    * @internal
    */
    private $description;

    /**
    * Create a new unit object
    * @param float  $value       The value
    * @param string $unit        The value's unit
    * @param string $description The value's description
    */
    public function __construct(float $value = 0.0, string $unit = null, string $description = null)
    {
        $this->value = $value;
        $this->unit = $unit;
        $this->description = $description;
    }

    /**
    * Get the value as formatted string with unit.
    * Unit will not be included if it is empty
    *
    * @return string The value formatted string with unit.
    */
    public function __toString(): string
    {
        return $this->getFormatted();
    }

    /**
    * Get the value's unit.
    * This also converts 'celsius' to 'C' and 'fahrenheit' to 'F'.
    *
    * @return string The value's unit.
    */
    public function getUnit(): ?string
    {
        if ($this->unit == 'celsius' || $this->unit == 'metric') {
            return "C";
        } elseif ($this->unit == 'fahrenheit') {
            return 'F';
        } else {
            return $this->unit;
        }
    }

    /**
    * Get the value.
    *
    * @return float The value
    */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
    * Get the value's description.
    *
    * @return string Value's description.
    */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
    * Get the value as a formatted string with unit.
    *
    * @return string The value as formatted string with unit.
    */
    public function getFormatted(): string
    {
        if (!empty($this->getUnit())) {
            return (string)$this->getValue() . " " . $this->getUnit();
        } else {
            return (string)$this->getValue();
        }
    }
}
