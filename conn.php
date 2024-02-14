<?php
$hostname = "localhost";
$database = "lab4";
$username = "root";
$password = "lyw";

$conn = mysqli_connect($hostname, $username, $password); 
$db = mysqli_select_db($conn,$database);

?>