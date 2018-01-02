<?php
namespace Bhhaskin\WeatherBee\Exception;

use Bhhaskin\WeatherBee\Exception\Exception;

/**
 * Class for handling Backend Exceptions;
 */
class BackendError extends Exception
{
    protected $message = 'Backend Failure: 500';
}
