<?php
namespace Bhhaskin\WeatherBee\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Exception\Exception;

/**
 * @covers Bhhaskin\WeatherBee\Exception\Exception
 */
final class ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(Exception::class);
        throw new Exception();

    }
}
