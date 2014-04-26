<?php 

define('DD', __DIR__ . '/../');
require DD . "/vendor/autoload.php";

use Wpa13\Application;
$app = new Application();
$app->start();
unset($app);

 ?>