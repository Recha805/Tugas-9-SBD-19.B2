<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "showroom_laptop";



$conn   = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else #echo "Connected successfully";
?>