<?php 

define('DD', __DIR__ . '/../');

ob_start(); // Output buffering start
require DD . '/app/views/home.php';
ob_end_flush(); // Output Buffering release
 ?>