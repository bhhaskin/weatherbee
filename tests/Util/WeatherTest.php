<?php
namespace Bhhaskin\WeatherBee\Test\Util;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\Weather;

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Weather
 */
class WeatherTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testWeatherCreation()
    {
        $this->assertInstanceOf(Weather::class, new Weather("Test"));
    }
}
