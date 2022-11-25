<?php
  include "header.php";
?>

<h1>การสั่งซื้อของฉัน</h1>
<table class="table table-responsive">

<?php
  $sql = "SELECT * FROM tbl_orders WHERE email='$_SESSION[email]'";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_array($result)){
?>
  <tr>
     <td><?= $row[order_id]; ?></td>
     <td><?= $row[order_date]; ?></td>
     <td><?= $row[name]; ?></td>
     <td><?= $row[address]; ?></td>
     <td><?= $row[tel]; ?></td>
     <td><?= $row[email]; ?></td>
     <td><a href="order_detail.php">เรียกดู</a></td>
  </tr>
<?php
  }
?>
</table>

<?php
       include "footer.php";
   ?>
