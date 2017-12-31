<?php
namespace Bhhaskin\WeatherBee\Test\Util;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\City;

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\City
 */
class CityTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCityCreation()
    {
        $this->assertInstanceOf(City::class, new City());
    }
}
