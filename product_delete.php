<?php
  include "connect.php";
  $product_id = $_GET[product_id];
  $img = $_GET[img];

  unlink($img);

  $sql = "DELETE  FROM tbl_products WHERE product_id='$product_id' ";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "ลบข้อมูลเรียบร้อย";
    header("Location: product_select.php");
  }else{
    echo "ไม่สามารถลบได้";
  }

?>