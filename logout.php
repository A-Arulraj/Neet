<?php 
	error_reporting(0);
	session_start();
	
	unset($_SESSION["adminuser_id"]);
	unset($_SESSION["login_type"]);
	header('location: index.php');
?>