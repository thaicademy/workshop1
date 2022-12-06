<?php
  include "connect.php";
  $id = $_GET[id];
  $img = $_GET[img];

  unlink($img);

  $sql = "DELETE  FROM tbl_blogs WHERE id='$id' ";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "ลบข้อมูลเรียบร้อย";
    header("Location: blog_select.php");
  }else{
    echo "ไม่สามารถลบได้";
  }

?>