<?php
namespace Bhhaskin\WeatherBee\Backend;

use Bhhaskin\WeatherBee\Backend\Backend;
use Bhhaskin\WeatherBee\Util\{City, Temperature, Unit, Weather, Wind};
use Bhhaskin\WeatherBee\Exception\{LocationNotFound, BackendError};
use GuzzleHttp\Client;

/**
 * Weather.gov backend class
 */
class WeatherGov extends Backend
{

    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.weather.gov/',
            'headers' => [
                'User-Agent' => parent::USERAGENT,
                'Accept'     => 'application/geo+json',
            ],
            'http_errors' => false
        ]);
    }

    public function current(float $lat, float $lng)
    {

    }

    public function forcast(float $lat, float $lng)
    {

    }

}
