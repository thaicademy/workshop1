<?php
  session_start();
  include "connect.php";

  for($i=0; $i<=(int)$_SESSION["inLine"]; $i++){
     $sql = "SELECT * FROM tbl_products WHERE id = ' ".$_SESSION["product_id"][$i]." ' ";
     $result= mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     echo $_SESSION['product_id'][$i];
     echo "$row[name]";

  }

?>