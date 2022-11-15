<?php
include "connect.php";

$sql = "UPDATE tbl_products SET name='$_POST[name]', price='$_POST[price]', stock='$_POST[stock]', description='$_POST[description]', cat_name= '$_POST[cat_name]' WHERE product_id='$_GET[product_id]'";

if (mysqli_query($conn, $sql)) {
  echo "<script>
          alert('แก้ไขเรียบร้อย');
          window.location.href='./product_select.php';
        </script>";
} else {
  echo "ผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>