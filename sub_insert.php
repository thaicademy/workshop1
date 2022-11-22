<?php
include "connect.php";

$sql = "INSERT INTO tbl_subcategory(cat_name, sub_name)  VALUES ('$_POST[cat_name]', '$_POST[sub_name]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
  header("location: ./sub_form.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>