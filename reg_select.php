<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลผู้ลงทะเบียน</title>
</head>

<body>

<div class="container-fluid">

<?php
   include "connect.php";
   $sql = "SELECT * FROM tbl_users";       //ดึงข้อมูลทั้งหมด tbl_users
   $result = mysqli_query( $conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
    echo "$row[email] <br/>";               //แสดงผลค่า
    echo "$row[firstname]  $row[lastname]";
   }

?>

</div>

</body>

</html>