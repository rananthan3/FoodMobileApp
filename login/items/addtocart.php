<?php
session_start();
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php


include_once('../db.php');
require_once('../../config.php');

//var_dump($_GET);
//echo("hello");

$digits =9;
$order_id = rand(0, pow(10, $digits)-1);




$order_query = "INSERT INTO `Order`(`ID`, `customer_id`) VALUES ('$order_id', '{$_SESSION['customer_id']}')";

if ($mysqli->query($order_query) === TRUE) {
    // echo "New record created successfully <br>";
} else {
    echo "Error: " . $order_query . "<br>" . $mysqli->error;
}



foreach ($_GET as $key => $value) { 
	// echo("$key,$value<br>");
	$sql[] = '("'.$order_id.'","'.mysqli_real_escape_string($mysqli,$key).'", '.mysqli_real_escape_string($mysqli,$value).')';

}

// var_dump($sql);
// echo("<br><br>");



$query = 'INSERT INTO OrderItem (Order_ID, Product_ID, Quantity) VALUES '.implode(',', $sql);


if ($mysqli->query($query) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}


$query = "SELECT Order_ID, Product_ID, Quantity, Price, Quantity*Price AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = $order_id";

$result = mysqli_query($mysqli,$query);

echo "<table>"; 

echo "<tr>
    <th>Order_ID</th>
    <th>Product_ID</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
  </tr>";

while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['Order_ID'] . "</td><td>" . $row['Product_ID'] . "</td><td>". $row['Quantity'] . "</td><td>" . $row['Price'] . "</td><td>" . $row['Total'] ."</td></tr>";  
}

echo "</table>";


$query = "SELECT SUM(Quantity*Price) AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = $order_id";

$result = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($result);

echo $row[0];

$total = $row[0];



$mysqli->close();





?>

<form action="../../charge.php" method="post">
<input type="hidden" name="amount" value="<?php echo $total *100?>" />
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="<?php echo $total *100?>"
          data-description="Access for a year"         
          data-locale="auto" 
          id="donate-button"></script>
</form>


<a href="../logout.php" rel="external">Logout</a>
</body>
</html>