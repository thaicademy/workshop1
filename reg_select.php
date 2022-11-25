<?php
       include "header.php";
   ?>


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

<?php
       include "footer.php";
   ?>
