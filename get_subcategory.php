<?php
  include "connect.php";
  $cat_name= $_GET['cat_name'];
  $sql = "SELECT * FROM tbl_sub WHERE cat_name='$cat_name' ";
  $result=mysqli_query($conn,$sql);
  $json = array();
  while($row=mysqli_fetch_assoc[$result]){
    array_push($json, $row);
  }

  echo json_encode($json);

?>