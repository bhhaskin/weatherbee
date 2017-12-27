<?php
namespace Bhhaskin\WeatherBee\Tests;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Exception;

/**
 * @covers Bhhaskin\WeatherBee\Exception
 */
final class ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(Exception::class);
        throw new Exception();

    }
}
