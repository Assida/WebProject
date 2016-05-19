<?php 
session_start();
if($_SESSION['login']==NULL){
	header("Location:index.php");
}
 ?>
}
<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Make it easy</title>
	<link rel="shortcut icon" href="img/h.png" type="image/png">

		<?php require_once("section/header.php"); ?>

<article>
		<div class="karusel">
	    	<p class="name" > Jobs </p>  
	      		<div class="video">  <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" title="Ваша почта">  <img src="img/mail.png"><p>your mail/gmail</p> </a> </div>
	      		<div class="video"> <a href="https://www.linkedin.com/" target="_blank" title="Сайт поиска работ"> <img src="img/l.png"><p> linkedin</p> </a> </div>
	      		<div class="video"> <a href="https://habrahabr.ru/" target="_blank" title="Новостная лента"> <img src="img/h.png"><p> habrahabr</p>   </a></div>
	      		<div class="video"> <a href="https://news.mail.ru/" target="_blank" title="Новости в РК"><img src="img/n.png"><p> news</p> </a> </div>
     	</div>

     	<div id=sovet class="hidden"> Во время работы будьте максимально cконцентрированы!</div>

		<div class="karusel"  id="ret">
     	   		<div class="name" > Social networks  </div>
     			<div class="video">  <a href="https://www.facebook.com/" target="_blank" title="Ваш facebook">  <img src="img/f.png"><p> facebook</p> </a> </div>
	      		<div class="video">  <a href="https://vk.com/feed" target="_blank" title="Вконтакте">  <img src="img/v.png"><p> vk</p> </a></div>
	      		<div class="video">  <a href="https://twitter.com/" target="_blank" title=" Ваш твиттер"><img src="img/t.png"><p> twitter</p>  </a> </div>
	      		<div class="video" id="ree"> <a href="https://music.yandex.ru/" target="_blank" title="Ваша музыка"><img src="img/mm.png"><p> music</p> </a> </div>
     	</div>

     	<div id=sovet class="hidden">  Справившись с работой ,можете отдохнуть </div>
     	
</article>

</div>

<?php require_once("section/footer.php"); ?>