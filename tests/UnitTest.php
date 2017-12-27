<?php

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\Unit;

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Unit
 */
final class UnitTest extends TestCase
{

    /**
     * @covers ::__construct
     */
    public function testUnitCreation()
    {
        $this->assertInstanceOf(Unit::class, new Unit(0.0, "", ""));
    }

    /**
     * @covers ::getValue
     */
    public function testGetValue()
    {
        $unit = new Unit(1.0, "", "");
        $this->assertEquals($unit->getValue(), 1.0);
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnit()
    {
        $unit = new Unit(0.0, "foo", "");
        $this->assertEquals($unit->getUnit(), "foo");
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnitFahrenheit()
    {
        $unit = new Unit(0.0, "fahrenheit", "");
        $this->assertEquals($unit->getUnit(), "F");
    }

    /**
     * @covers ::getUnit
     */
    public function testgetUnitCelsius()
    {
        $unit = new Unit(0.0, "celsius", "");
        $this->assertEquals($unit->getUnit(), "C");
    }

    /**
     * @covers ::getDescription
     */
    public function testGetDecription()
    {
        $unit = new Unit(0.0, "", "foo");
        $this->assertEquals($unit->getDescription(), "foo");
    }

    /**
     * @covers ::getFormatted
     */
    public function getFormatted()
    {
        $unit = new Unit(1.1, "fahrenheit", "");
        $this->assertEquals($unit->getFormatted(), "1.1 F");
    }

    /**
     * @covers ::__toString
     */
    public function testToString()
    {
        $unit = new Unit(1.1, "fahrenheit", "");
        $this->assertEquals($unit, "1.1 F");
    }

}
