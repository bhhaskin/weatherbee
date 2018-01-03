<?php

require_once("bootstrap.php");

use Bhhaskin\WeatherBee;

$weather = new WeatherBee();

$weather->forecast(39.5581, -119.8508);
