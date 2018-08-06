<?php
 include_once("db.php");

 if (!isset($_POST['psw']) || !isset($_POST['psw-repeat']))
 {
 	header('Location: signup.php');
 }


if ($_POST['psw']!= $_POST['psw-repeat'])
 {
     echo("Oops! Password did not match! Try again. ");
 }


if(isset($_POST['submit'])){
		// $firstName = $_POST['first_name'];
		// $surName = $_POST['surname'];
		$email 	= $_POST['email'];
		$password = $_POST['psw'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into users (email, password) value('".$email."','".$hashPassword."')";
		$result = mysqli_query($link, $sql);
		if($result)
		{
			echo "Registration successfully";
			session_start();
			$_SESSION['login']=$email;
			header("location: cart.php");
		}
	}
	mysqli_close($link);


 ?>