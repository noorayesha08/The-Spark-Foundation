<?php

$db_server   = 'localhost';
$db_user     = 'root';
$db_password = "";
$db_name     = "sparks_bank";


$conn = mysqli_connect($db_server ,$db_user,$db_password,$db_name)
or 
die("Error Connecting to the database");

echo "Connection is Sucess";
?>
