<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('visits');
$logger->pushHandler(new StreamHandler('visits.log', Logger::INFO));

$logger->info('New Visit', [
    'ip' => $_SERVER["REMOTE_ADDR"],
    'path' => $_SERVER['REQUEST_URI']
]);

echo 'Logged your visit';