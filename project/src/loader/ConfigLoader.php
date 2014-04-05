<?php
	function LoadConfig($key){
		$data=require DD."app/config/app.php";
		return $data[$key];
	}
?>