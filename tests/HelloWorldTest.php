<?php
use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\HelloWorld;

/**
 * @covers Bhhaskin\WeatherBee\HelloWorld
 */
final class HelloWorldTest extends TestCase
{
  public function testHelloWorld()
  {
    $this->expectOutputString('Hello World!');
    new HelloWorld();
  }
}
