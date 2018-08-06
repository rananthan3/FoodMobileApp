<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  // echo("hello <br>");
  // print_r($_POST);
  // var_dump($_REQUEST);
  // var_dump($_GET);

 include_once("db.php");


   if (!isset($_POST['password']) || !isset($_POST['username']))
   {
    echo($_POST['password']);
    // header('Location: signup.php');
   }

  $email = $_POST['username'];
  $password = $_POST['password'];


  $pass_query = "SELECT password FROM users WHERE email='$email'";
  // $queried = mysql_query($pass_query);
  echo($pass_query . "<br>");

  if ($result = $mysqli->query($pass_query)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $user_pass = $row['password'];
      $veri_password = password_verify($password, $user_pass);

      if(!$veri_password === TRUE){
        echo("Error");
      } else {
        echo("Success");
      }
    }
  } else {
    echo("Failure <br>");
  }
  

  

  

  
  $mysqli->close();
?>