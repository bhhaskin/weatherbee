<?php
namespace Bhhaskin\WeatherBee\Test;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\Location;

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Location
 */
class LocationTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testLocationCreation()
    {
        $this->assertInstanceOf(Location::class, new Location(0.0, 0.0));
    }
}
