<?php
include "connect.php";

$sql = "INSERT INTO tbl_category(cat_name)  VALUES ('$_POST[cat_name]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
  header("location: ./index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>