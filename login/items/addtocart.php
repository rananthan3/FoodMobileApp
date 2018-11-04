<?php
session_start();

$_SESSION["products"]=$_GET;


?>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<style>
h1 {
	border-style: solid;
	border-radius: 25px;
	border-width: thin;
	text-align: center;
	border-color: #8cf442;
}
</style>
</head>
<body>
<?php



include_once('../db.php');
require_once('../../config.php');







if (!isset($_SESSION['order_id'])){
	echo "<script>console.log( 'Debug Objects: " . "Not Set" . "' );</script>";
	$digits =9;
	$_SESSION['order_id'] = rand(0, pow(10, $digits)-1);

	$order_id = $_SESSION['order_id'];


	$order_query = "INSERT INTO `Order`(`ID`, `customer_id`) VALUES ('{$_SESSION['order_id']}', '{$_SESSION['customer_id']}')";

	if ($mysqli->query($order_query) === TRUE) {
	    // echo "New record created successfully <br>";
	} else {
	    echo "Error: " . $order_query . "<br>" . $mysqli->error;
	}

} else {
	echo "<script>console.log( 'Debug Objects: " . $_SESSION['order_id'] . "' );</script>";
}


$order_id = $_SESSION['order_id'];

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


$query = "SELECT Name, Order_ID, Product_ID, Quantity, Price, Quantity*Price AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = $order_id";

$result = mysqli_query($mysqli,$query);
echo '<div data-role="page">';
echo '<div data-role="content">';
echo '<table data-role="table" class="ui-responsive">'; 
echo '<thead>';
echo "<tr>
	<th>Name</th>
    <th>Order_ID</th>
    <th>Product_ID</th>
    <th>Quantity (lbs)</th>
    <th>Price</th>
    <th>Total</th>
  </tr>";
echo '</thead>';
echo '<tbody>';
while($row = mysqli_fetch_array($result)){   
echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Order_ID'] . "</td><td>" . $row['Product_ID'] . "</td><td>". $row['Quantity'] . "</td><td>" . $row['Price'] . "</td><td>" . $row['Total'] ."</td></tr>";  
}
echo '</tbody>';
echo "</table>";




$query = "SELECT SUM(Quantity*Price) AS Total FROM OrderItem 
LEFT JOIN Product 
ON OrderItem.Product_ID=Product.ID 
WHERE OrderItem.Order_ID = $order_id";

$result = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($result);

echo '<br><br>';
echo '<h1 border: 5px solid red>Grand Total: $' . money_format('%(#10n', $row[0]) . '</h1>';



$total = $row[0];







foreach($_GET as $key => $value){
   echo "$key: $value<br><br>";

   $query = "SELECT Inventory FROM Product WHERE ID=" . $key;
   $result = mysqli_query($mysqli,$query);
   echo $mysqli->error;
   $row = $result->fetch_assoc();

   if (!isset($_SESSION['OriginalInventory'][$key]))
	{
	    $_SESSION["OriginalInventory"][$key] = $row["Inventory"];

	}


   $new_inventory = $row["Inventory"] - $value;


   $query = "UPDATE Product SET Inventory = " . $new_inventory . " WHERE `ID`=" . $key;
   echo $query . "<br><br>";
   mysqli_query($mysqli,$query);
   echo $mysqli->error . "<br><br>";


   if ($new_inventory < 0 ){
	   $query = "SELECT Name FROM Product WHERE ID=" . $key;
	   $result = mysqli_query($mysqli,$query);
	   $row = $result->fetch_assoc();

	   	echo '<font color="red">Sorry, We are out of ' . $row["Name"] . ".</font><br>";
   }
}





$mysqli->close();





?>

<form action="../../charge.php" method="post">
<input type="hidden" name="amount" value="<?php echo $total *100?>" />
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount="<?php echo $total *100?>"
          data-description="IAMFARMS Organic"
          data-locale="auto"
          id="donate-button"></script>
</form>

<form action="delete.php">
  <button type="submit">Delete Order</button>
</form>

<a href="../cart.php" rel="external" >Back</a><br>
<a href="../logout.php" rel="external">Logout</a>
</div>
</div>
</body>
</html>

