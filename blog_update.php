<?php
include "connect.php";

$sql = "UPDATE tbl_blogs SET title='$_POST[title]', detail='$_POST[detail]' WHERE id='$_GET[id]'";

if (mysqli_query($conn, $sql)) {
  echo "<script>
          alert('แก้ไขเรียบร้อย');
          window.location.href='./blog_select.php';
        </script>";
} else {
  echo "ผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>