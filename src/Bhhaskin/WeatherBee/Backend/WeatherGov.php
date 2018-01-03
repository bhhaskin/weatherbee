<?php
namespace Bhhaskin\WeatherBee\Backend;

use Bhhaskin\WeatherBee\Forecast;
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

    public function forecast(float $lat, float $lng)
    {
        $city = $this->getCity($lat, $lng);

        $res = $this->client->request('GET', "points/$lat,$lng/forecast");

        if ($res->getStatusCode() == 404) {
            throw new LocationNotFound();
        } elseif ($res->getStatusCode() == 500) {
            throw new BackendError();
        }

        $rawData = \json_decode((string)$res->getBody(), true);

        $periods = $rawData['properties']['periods'];

        $highs = array();
        $lows = array();

        if ($periods[0]['isDaytime']) {
            $highs = $this->getTemperatures($periods, 0);
            $lows = $this->getTemperatures($periods, 1);
        } else {
            $highs = $this->getTemperatures($periods, 1);
            $lows = $this->getTemperatures($periods, 0);
        }

        $shortForecasts = array();

        if ($periods[0]['isDaytime']) {
            $start = 0;
        } else {
            $start = 1;
        }

        for ($i=$start; $i <= 13; $i+=2) {
            array_push($shortForecasts, [
                'shortForecast' => $periods[$i]['shortForecast'],
                'icon' => $periods[$i]['icon'],

        ]);
        }

        $winds = array();



    }

    protected function getTemperatures(array $periods, int $start): array
    {
        $temps = array();

        for ($i=$start; $i <= 13; $i+=2) {
            $unit = new Unit(
                $periods[$i]['temperature'],
                $periods[$i]['temperatureUnit']
            );
            array_push($temps, $unit);
        }

        return $temps;
    }

    protected function getCity(float $lat, float $lng)
    {
        $res = $this->client->request('GET', "points/$lat,$lng");

        if ($res->getStatusCode() == 404) {
            throw new LocationNotFound();
        } elseif ($res->getStatusCode() == 500) {
            throw new BackendError();
        }

        $rawData = \json_decode((string)$res->getBody(), true);

        return new City(
            $rawData['properties']['relativeLocation']['properties']['city'],
            $rawData['properties']['relativeLocation']['properties']['state'],
            'USA',
            $lat,
            $lng
        );
}

}
