<?php 
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

ob_start();
if($page == 'home') {
	require "views/home.php";
} elseif ($page == 'blog') {
	require "views/blog.php";
}
ob_end_flush();
 ?>