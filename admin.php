<?php 
	session_start();
	if($_SESSION['login']==NULL){
	header("Location:index.php");
	}
?>



 <!Doctype html>
<html lang="en">
<head>
    <title> Admin part</title>
    <link rel="shortcut icon" href="img/11.png" type="image/png">
    
<?php require_once("section/header.php"); ?>

<article>
	
	It is only admin part! 
	You can retry news on pages news!
		<form method="post" enctype="multipart/form-data" action="toUpload.php">
			<input type="file" name="img" />
			<!-- <input type="text" name="id" /> -->
			<input type="submit" value="Send photo to db"/>
		</form>
	 	 
	 	 <form action="toShow.php" method="POST" enctype="multipart/form-data">
				<!-- <input type="text" name="ids"> -->
				<input type="submit" value="Show" name="show">
		</form>
          



</article>

<?php require_once("section/footer.php"); ?>

