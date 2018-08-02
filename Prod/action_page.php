<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id453988_root", "rootroot", "id453988_demo");
 
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
<head>
<style>
#example {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#example td, #example th {
    border: 1px solid #ddd;
    padding: 8px;
}

#example tr:nth-child(even){background-color: #f2f2f2;}

#example tr:hover {background-color: #ddd;}

#example th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<link rel="stylesheet" href="jquery.mobile-1.4.4.min.css">
<script src="jquery.mobile-1.4.4.min.js"></script>
</head>
<body>

Welcome <?php echo $_GET["email"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<?php


$link = mysqli_connect("localhost", "id453988_root", "rootroot", "id453988_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$result = mysqli_query($link,"SELECT * FROM data");

echo "<table border='1' data-role='table'  id='example' data-mode='reflow' class='ui-responsive' style='width:100%'>
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