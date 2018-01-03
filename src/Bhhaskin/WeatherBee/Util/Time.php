<?php
namespace Bhhaskin\WeatherBee\Util;

/**
 * Class that handles time.
 */
class Time
{
    /**
     * The start of the time period
     * @var \DateTime
     */
    public $to;

    /**
     * The end of the time period
     * @var \DateTime
     */
    public $from;

    /**
     * Day of time period
     * @var \DateTime
     */
    public $day;

    /**
     * Creates Time object
     * @param DateTime $from The start of the time period
     * @param DateTime   $to   The end of the time period
     */
    public function __construct(\DateTime $from,\DateTime $to = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->day = new \DateTime($from->format('Y-m-d'));
    }
}
