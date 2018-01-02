<?php

require_once("bootstrap.php");

use Bhhaskin\WeatherBee\Weather;

$weather = new Weather();

$weather->current(39.5581, -119.8508);
