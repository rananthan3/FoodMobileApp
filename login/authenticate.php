<?php

  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  // echo("hello <br>");
  // print_r($_POST);
  // var_dump($_REQUEST);
  // var_dump($_GET);

 
   include_once("db.php");
   
   session_start();
   ob_start();

   if (!isset($_POST['password']) || !isset($_POST['username']))
   {
    echo($_POST['password']);
    // header('Location: signup.php');
   }

  $email = $_POST['username'];
  $password = $_POST['password'];

  $cust_query = "SELECT ID FROM Customer WHERE Email='$email'";
  if ($result = $mysqli->query($cust_query)){
      
      $row = mysqli_fetch_assoc($result);
      //echo($row["ID"]);
      $_SESSION['customer_id'] = $row["ID"];
  }




  $pass_query = "SELECT password FROM users WHERE email='$email'";
  // $queried = mysql_query($pass_query);
  //echo($pass_query . "<br>");

  if ($result = $mysqli->query($pass_query)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $user_pass = $row['password'];
      $veri_password = password_verify($password, $user_pass);

      if(!$veri_password === TRUE){
        echo("Error");
      } else {
        
        $_SESSION['login']=$email;
        header("location: cart.php");
      }
    }
  } else {
    echo("Failure <br>");
  }
  

  

  

  
  $mysqli->close();
?>