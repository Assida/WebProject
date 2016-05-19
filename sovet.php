<!DOCTYPE html>
<html>
<head>
	<title>  Your page</title>
	<link rel="shortcut icon" href="img/11.png" type="image/png">
	<?php require_once("section/header.php"); ?>

<article>
	  <div class="karusel">
			<div id="unk" >  <p class="name"> Советы:</p>  
	      		<div class="video">  <a href="product.php" target="_blank" title="Загляните!">  <img src="img/10.png"> <div class="m">Продуктивность</div>   </a> </div>
	      		<div class="video"> <a href="helth.php" target="_blank" title="Это важно!"> <img src="img/9.png"> <div class="m"> Здоровье</div> </a> </div>
	      		<div class="video"> <a href="time.php" target="_blank" title="Просмотрите!"> <img src="img/7.png"> <div class="m"> Тайм-менеджмент</div> </a></div>
	      		<div class="video"> <a href="opasity.php" target="_blank" title="Попробуйте сейчас!"> <img src="img/h.png"> <div class="m">Приступите к работе!</div></a></div>
	      	</div>
      </div>

   
            <div id="be"> <p>Открыть To-do list:</p> </div>
            <button class="but1 todom"> Open!</button>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>
         $(document).ready(function(){
            $("button").click(function(){
               $("#be").load("todo.php");
            });
         });
   </script>





</article>


	<?php require_once("section/footer.php"); ?>