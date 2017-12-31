<?php
namespace Bhhaskin\WeatherBee\Tests;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\{Convert};

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Convert
 */
class ConvertTest extends TestCase
{
    /**
     * @covers ::toFahrenheit
     */
    public function testFahrenheitValue()
    {
        $this->assertEquals(Convert::toFahrenheit(0), 32);
    }

    /**
     * @covers ::toCelsius
     */
    public function testCelsiusValue()
    {
        $this->assertEquals(Convert::toCelsius(32), 0);
    }
}
