<?php 
	
	function toUploadImage($ulog,$url){
		include "connection.php";
			// echo "function worked";

		$query = "INSERT INTO images VALUES(null,'$url','$ulog')";
		
		if (mysqli_query($conn,$query)) {
			header("Location:admin.php");
		}
	}
	function showImage($ulog){
		include 'connection.php';
	$sel = "SELECT * from images where user_id='$ulog' ";
 	if ($res = mysqli_query($conn,$sel)) {
 			while ($arr = $res->fetch_assoc()) {
			 	$url = $arr['url'];
			 	$id = $arr['id'];
 				echo "<img src=$url>";
 			}
 	}
 	// if (isset($_POST['show'])) {
 	// 	echo "<img src=$url>";
 	// }
 	// if(!$ids==$id){
 	// 	echo '<script language="javascript">';
		// echo "alert('Wrong id')";
		// echo '</script>';
		// include "index.php";
 	// }
	}
	function showImageAll(){
		include 'connection.php';
		$sel = "SELECT * from images";
	 	if ($res = mysqli_query($conn,$sel)) {
	 			while ($arr = $res->fetch_assoc()) {
				 	$url = $arr['url'];
				 	$id = $arr['id'];
	 				echo "<img src=$url>";
	 			}
	 	}
	}
 ?>