<?php
	session_start();
	include 'functions.php';

	if (isset($_SESSION['login'])) {
		$user_log = $_SESSION['login'];
	}else header("Location:ad.php");


	// $id = $_POST['id'];

	$f_name = "images/";
	$p_name = $_FILES['img']['name'];

	$full_path = $f_name.$p_name;

	
	if(is_uploaded_file($_FILES['img']['tmp_name'])){
		move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
		toUploadImage($user_log,$full_path);
		// echo "Success";
		echo "";
	}
?>