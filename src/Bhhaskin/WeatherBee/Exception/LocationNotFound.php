<?php
namespace Bhhaskin\WeatherBee\Exception;

use Bhhaskin\WeatherBee\Exception\Exception;

/**
 * Class for handling Location Not Found Backend Exceptions;
 */
class LocationNotFound extends Exception
{
    protected $message = 'Location Not Found Using Weather Backend';
}
