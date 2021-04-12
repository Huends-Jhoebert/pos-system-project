<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name = "viewport" content = "width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no">
      <link rel="stylesheet" href="css/log-in.css">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- <link rel="shortcut icon" href="images/AdminLTELogo.ico" type="image/x-icon"> -->
      <title>GEM'S AVON / LOG IN</title>
   </head>
   <body>

      <h1 class="avon-logo">GEM'S AVON</h1>
      <p class="pos-p pos">POINT OF SALES</p>
      <p class="top-log-in">Sign in</p>
      <form action="index.php" class="form-container" method="post">
         <div class="flex-container">
            <i class="fas fa-user-circle"></i>
            <img src="images/user.svg" alt="username" class="input-image">
            <p>Username</p>
         </div>
         <div class="input-username">
            <input type="text" name="username" class="username" required>
         </div>
         <div class="flex-container">
            <img src="images/padlock.svg" alt="password" class="input-image">
            <p>Password</p>
         </div>
         <div class="input-username">
            <input type="password" name="password" class="password" required>
         </div>
         <div class="log-in-bt">
            <button type="submit" name="submit-btn" class="btn">Log in</button>
         </div>
      </form>


   </body>
</html>



<?php


   if (isset($_POST['submit-btn'])){

      $userName = $_POST['username'];

      $passWord = $_POST['password'];

      if ($userName == "johndope20" and  $passWord == "dope20"){
         header('Location:dashboard/dashboard.php');
      }

      else if ($userName == "johndope20"  and $passWord != "dope20"){
         echo "<p class='log-in-result'>Wrong Password Plz Try Again</p>";
      }

      else if ($userName != "johndope20"  and $passWord == "dope20"){
         echo "<p class='log-in-result'>Wrong Username Plz Try Again</p>";
      }

      else{
        echo "<p class='log-in-result'>Wrong Username and Password Plz Try Again</p>";
      }

         //<!-- removing the log in result script
         echo '<script src="js/remove.js"></script>';

   }


?>
