<?php
$servername = "localhost"; //us-cdbr-east-06.cleardb.net
$username = "root";        //bcfa287788eff9
$password = "root1234";    //58c505aa
$dbname = "workshop1";     //heroku_9e8cfc737b5af21

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>