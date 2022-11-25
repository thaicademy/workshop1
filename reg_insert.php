<?php
include "connect.php";

$sql = "INSERT INTO tbl_users (firstname, lastname, email, address, password )
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[address]', '$_POST[password]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
 // header("location: ./reg_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 // echo "ไม่สามารถบันทึกได้";
}

mysqli_close($conn);
?>