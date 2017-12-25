<?php

use PHPUnit\Framework\TestCase;
use Bhhaskin\WeatherBee\HelloWorld;
/**
 * @covers HelloWorld
 */
final class HelloWorldTest  extends TestCase
{
  public function testHelloWorld()
  {
    $this->expectOutputString('Hello World!');
    $helloWorld = new HelloWorld();
  }
}
