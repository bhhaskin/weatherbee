<?php
namespace Bhhaskin\WeatherBee\Test\Util;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Util\{Wind, Unit};

/**
 * @coversDefaultClass Bhhaskin\WeatherBee\Util\Wind
 */
class WindTest extends TestCase
{
    /**
     * @covers ::__construct
     */
    public function testWindCreation()
    {
        $unit = new Unit(0.0);
        $this->assertInstanceOf(Wind::class, new Wind($unit, "foo"));
    }
}
