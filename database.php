<?php
  
  $conn = mysqli_connect("localhost","root","","template_db");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();}
      if (isset($_POST["registerbutton"])) {
        $login = $_POST["login"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        
            if ($_POST["password1"] != $_POST["password2"]){
                echo "Неправильный пароль";
            }
        $sql = "INSERT INTO users (login,password1)
        VALUES ('" . $login . "', '" . $password1 . "')";

        if ($conn->query($sql) === TRUE) {
              echo "Welcome !New record created successfully";
              $_SESSION['login'] = $login;
              header('location: login.php');
        }else{
              echo "Error: " . $sql . "<br>" . $conn->error;
              header('location: log.php');
        }
      $conn->close();
    }

    else if (isset($_POST["loginbutton"])){
          $login = $_POST["login"];
          $password1 = $_POST["password1"];
          if($login == "admin" && $password1 == "asdf"){
            header('location:admin.php');
           }else{
          $sql = "SELECT * FROM users WHERE login ='".$login."'
          AND password1 ='".$password1."'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
                echo "Вы зашли на свой аккаунт , дорогая ".$login."";
                $_SESSION["login"] = true;
                $_SESSION['login'] = $login;
               header('location: opasity.php');
          }else{
          echo "Something wrong. Please check correct user name/password";
          }
      }
    }
?>