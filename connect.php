<?php
$servername = "us-cdbr-east-06.cleardb.net";
$username = "bcfa287788eff9";
$password = "58c505aa";
$dbname = "heroku_9e8cfc737b5af21";  //ชื่อฐานข้อมูล

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>