<!DOCTYPE html>
<html>
<head>
	<title> About us</title>
	<link rel="shortcut icon" href="img/c.png" type="image/png">

	<link href="style.css" rel="stylesheet">
	<?php require_once("section/header.php"); ?>


<article>    

	<div id=carousel>
		<figure id=spinner>
			<img src=img/q1.png  alt="">
			<img src=img/w.png   alt=""> 
			<img src=img/e1.png  alt="">
			<img src=img/r.png  alt="">
			<img src=img/y.png  alt="">
		</figure>
	</div>
<span style=float:left class=ss-icon onclick="galleryspin('-')">&lt;</span>
<span style=float:right class=ss-icon onclick="galleryspin('')">&gt;</span>



 <script type="text/javascript">
	 		 var angle = 0;
			function galleryspin(sign) { 
			spinner = document.querySelector("#spinner");
			if (!sign) { angle = angle + 72; } else { angle = angle - 72; }
			spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");

			}
 </script>


	<div id="knopka"> 
			<a href="log.php">  Моментальная регистрация </a>
	</div>


</div>
</article>
</div>

<?php require_once("section/footer.php"); ?>


	

	