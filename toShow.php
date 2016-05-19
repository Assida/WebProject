<?php
session_start();
include 'functions.php';
 

	if (isset($_SESSION['login'])) {
		$user_log = $_SESSION['login'];
	 	showImage($user_log);
	}else header("Location:ad.php");

 ?>