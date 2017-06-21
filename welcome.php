<?php session_start();?>

<html>
  <head>
    <title> Home </title>
  </head>
  <body>
   <?php
    if(!isset($_SESSION['user'])) // If session is not set then redirect to Login Page
    {
      header("Location:student_login.php");  
    }
    include 'homepage.php' ;
  ?>
  </body>
</html>
