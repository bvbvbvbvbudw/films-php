<?php

define('APP_PATH', dirname(__DIR__));
define('PHOTO_PATH', APP_PATH . '/public');

require_once APP_PATH.'/vendor/autoload.php';

use App\Kernel\App;

$app = new App();

$app->run();
