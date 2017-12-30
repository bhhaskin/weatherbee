<?php

call_user_func(function () {
    if (!is_file($autoloadFile = __DIR__ . '/../vendor/autoload.php')) {
        throw new \RuntimeException('Did not find vendor/autoload.php. Did you run "composer install --dev"?');
    }
    /** @noinspection PhpIncludeInspection */
    require_once $autoloadFile;
});

if (file_exists(__DIR__ . '/../.env')) {
  $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
  $dotenv->load();
}
