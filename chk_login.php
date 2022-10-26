<?php
  session_start();
  include "connect.php";

  if(!empty($_POST['email']) && !empty($_POST['password']) ){
      $sql = "SELECT * FROM tbl_users WHERE 
            ( email='$_POST[email]') && password ='$_POST[password]' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);

      if($row['email'] == $_POST['email'] && $row[password] == $_POST['password']){
          $_SESSION['email'] = $row['email'];
          $_SESSION['status'] = $row['status'];
          $_SESSION['school'] = "โรงเรียนฝึกอาชีพกรุงเทมหมานคร(ดินแดง1)";
          header("location: ./dashboard.php"); 
      }else{
        echo "<script>
                alert('Email หรือ Password ไม่ถูกต้อง');
                window.location.href='./login.php';
              </script>";
      }
  }else{
    echo "<script>
            alert('กรุณาป้อนข้อมูลด้วย');
            window.location.href='./login.php';
         </script>";
  }

?>