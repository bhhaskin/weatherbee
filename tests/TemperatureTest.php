<?php
namespace Bhhaskin\WeatherBee\Tests;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\{Temperature, Unit};

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Temperature
 */
class TemperatureTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testTemperatureCreation()
    {
        $unitTest = new Unit(1.1);
        $this->assertInstanceOf(Temperature::class, new Temperature(
            $unitTest,
            $unitTest,
            $unitTest
        ));
    }

    /**
     * @covers ::getValue
     */
    public function testGetValue()
    {
        $unit = new Unit(1.0);
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getValue(), 1.0);
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnit()
    {
        $unit = new Unit(0.0, "foo");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getUnit(), "foo");
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnitFahrenheit()
    {
        $unit = new Unit(0.0, "fahrenheit");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getUnit(), "F");
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnitCelsius()
    {
        $unit = new Unit(0.0, "celsius");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getUnit(), "C");
    }

    /**
     * @covers ::getDescription
     */
    public function testGetDecription()
    {
        $unit = new Unit(0.0, "", "foo");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getDescription(), "foo");
    }

    /**
     * @covers ::getFormatted
     */
    public function testGetFormattedWithUnit()
    {
        $unit = new Unit(1.1, "fahrenheit");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getFormatted(), "1.1 F");
    }

    /**
     * @covers ::getFormatted
     */
    public function testGetFormattedWithoutUnit()
    {
        $unit = new Unit(1.1);
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature->getFormatted(), "1.1");
    }

    /**
     * @covers ::__toString
     */
    public function testToString()
    {
        $unit = new Unit(1.1, "fahrenheit");
        $temperature = new Temperature($unit, $unit, $unit);
        $this->assertEquals($temperature, "1.1 F");
    }
}
