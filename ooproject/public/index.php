<?php 
$start_memory = memory_get_usage();
define('DD', __DIR__ . '/../');
require DD . "/vendor/autoload.php";

use Wpa13\Application;
$app = new Application();
$app->load();
$end_memory = memory_get_usage();
$mem_usage = ($end_memory - $start_memory) / 1024; 
echo round($mem_usage, 2) . ' KB';
unset($app);

 ?>