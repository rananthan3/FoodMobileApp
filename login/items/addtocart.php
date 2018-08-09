<?php
session_start();
?>
<html>
<body>
<?php


include_once('../db.php');

//var_dump($_GET);
//echo("hello");

$digits =9;
$order_id = rand(0, pow(10, $digits)-1);




$order_query = "INSERT INTO `Order`(`ID`, `customer_id`) VALUES ('$order_id', '{$_SESSION['customer_id']}')";

if ($mysqli->query($order_query) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $order_query . "<br>" . $mysqli->error;
}



foreach ($_GET as $key => $value) { 
	echo("$key,$value<br>");
	$sql[] = '("'.$order_id.'","'.mysqli_real_escape_string($mysqli,$key).'", '.mysqli_real_escape_string($mysqli,$value).')';

}

var_dump($sql);
echo("<br><br>");



$query = 'INSERT INTO OrderItem (Order_ID, Product_ID, Quantity) VALUES '.implode(',', $sql);


if ($mysqli->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();





?>
<a href="../logout.php">Logout</a>
</body>
</html>