<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include_once('../db.php');




foreach($_SESSION["OriginalInventory"] as $key => $value){
   echo "$key: $value<br><br>";

   $query = "SELECT Inventory FROM Product WHERE ID=" . $key;
   $result = mysqli_query($mysqli,$query);
   echo $mysqli->error;
   $row = $result->fetch_assoc();  
   

   $query = "UPDATE Product SET Inventory = " . $value . " WHERE `ID`=" . $key;
   echo $query . "<br><br>";
   mysqli_query($mysqli,$query);
   echo $mysqli->error . "<br><br>";
   
}


$order_id = $_SESSION['order_id'];

$delete_query = "DELETE FROM `OrderItem` WHERE `Order_ID` = $order_id";

	if ($mysqli->query($delete_query) === TRUE) {	    
	    header("Location: /login/cart.php");
	} else {
	    echo "Error: " . $delete_query . "<br>" . $mysqli->error;
	}



$mysqli->close();



?>