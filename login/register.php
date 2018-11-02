<?php
 include_once("db.php");

 session_start();
 ob_start();

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

		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];


		$digits = 9;
		$custid = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

		$sql_2 = "INSERT INTO Customer (ID, Name, PhoneNo, Address, Email) VALUES ('".$custid. "','" . $name . "','" . $phone . "','" . $address . "','" . $email . "')";

		$result2 = mysqli_query($link,$sql_2);
		if($result2){
			echo($sql_2 . " success");
		}
		else{
			echo($sql_2);
			echo("fail");
		}


		$result = mysqli_query($link, $sql);
		if($result)
		{
			echo "Registration successfully";
			
			$_SESSION['login']=$email;
			$_SESSION['customer_id'] = $custid;
			// var_dump($_SESSION);
			header("location: cart.php");
		}
	}
	mysqli_close($link);


 ?>