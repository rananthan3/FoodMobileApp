<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$item = mysqli_real_escape_string($link, $_REQUEST['item']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);

 
// attempt insert query execution
$sql = "INSERT INTO data (Email,Item,Zip,Price,Date) VALUES ('$email', '$item', '$zip','$price',now())";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<html>
<body>

Welcome <?php echo $_GET["email"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<?php

$link = mysqli_connect("localhost", "root", "root", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$result = mysqli_query($link,"SELECT * FROM data");

echo "<table border='1'>
<tr>
<th>Email</th>
<th>Item</th>
<th>Zip</th>
<th>Price</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Item'] . "</td>";
echo "<td>" . $row['Zip'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>