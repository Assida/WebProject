 <!Doctype html>
<html lang="en">
<head>
    <title> Login or logout</title>
    <link rel="shortcut icon" href="img/12.png" type="image/png">
    

    <?php require_once("section/header.php"); ?>

<article> 
 	<div class="qwerty"> <p> Login </p> </div>
          <form method="post"  onsubmit="required2()" name="form2">
                  <input name="login" type="text" placeholder="Login"  class="form">
                  <input name="password1" type="password" placeholder="Password" class="form">
                  <input name="loginbutton" type="submit"   value="Вход" class="but1 form">
          </form>
        </div>
          
     <script src="myscript.js"> </script>

     <?php
session_start();
include 'database.php';
?>

</article>

  <?php require_once("section/footer.php"); ?>