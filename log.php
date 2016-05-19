<!Doctype html>
<html lang="en">
<head>
    <title> Login or logout</title>
    <link rel="shortcut icon" href="img/12.png" type="image/png">
    

    <?php require_once("section/header.php"); ?>

<article> 
  <center>
      <div class="qwerty"> <p> Registration </p> </div> 
          <form method="post" onsubmit="required()" name="form1">
                  <input name="name" type="text" placeholder="Name" class="form">
                   <input name="login" type="text" placeholder="New login" class="form" >
                  <input name="password1" type="password" placeholder="Cool password" class="form">
                  <input name="registerbutton" type="submit" class="but1  form" value="Save"  >
                  <input name="доделать" type="submit" value="Отмена,я пошутил(а)"  class="but2  form">
           </form>

     <a href="login.php"> <div class="qwerty"> <p> Login </p> </div>
     <a href="logout.php"> <div class="qwerty"> <p> Logout </p> </div>
      
</center>

        
  <script src="myscript.js"> </script>

<?php
session_start();
include 'database.php';
?>



 </article>

  <?php require_once("section/footer.php"); ?>