<?php
namespace Bhhaskin\WeatherBee\Util;

/**
 * Class for handling weather
 */
class Weather
{
    /**
     * Weather description.
     * @var string
     */
    public $description;

    /**
     * Weather icon.
     * @var string
     */
    public $icon;

    /**
     * Create Weather object.
     * @param string $description Weather description.
     * @param string $icon        Weather icon.
     */
    public function __construct(string $description, string $icon = null)
    {
        $this->description = $description;
        $this->icon = $icon;
    }
}
