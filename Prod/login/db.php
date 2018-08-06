<?php
$link = mysqli_connect("localhost", "id6704534_root", "rootroot", "id6704534_demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$mysqli = new mysqli("localhost", "id6704534_root", "rootroot", "id6704534_demo");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>