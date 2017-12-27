<?php
use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\Exception;

/**
 * @covers Bhhaskin\WeatherBee\Exception
 */
class ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(Exception::class);
        throw new Exception();

    }
}
