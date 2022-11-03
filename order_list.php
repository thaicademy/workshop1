<?php
  session_start();
  include "connect.php";
  include "navbar.php";
?>
<div class="container">

<?php
  if(!isset($_SESSION["intLine"])){
    echo "<h1>ตะกร้าว่าง กรุณาสั่งสินค้า</h1>";
    exit();
  }
?>
  <table class="table table-responsive">
    <tr>
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th>จำนวนที่สั่ง</th>
      <th>เป็นเงิน</th>
      <th>Delete</th>
    </tr>

<?php
   $Total = 0;  
   $SumTotal = 0;
  for($i=0; $i<=(int)$_SESSION["intLine"]; $i++){
     if($_SESSION["strProductID"][$i] != ""){
        $sql = "SELECT * FROM tbl_products WHERE id = ' ".$_SESSION["strProductID"][$i]." ' ";
        $result= mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $Total = $_SESSION["strQty"][$i] * $row["price"];
        $SumTotal = $SumTotal+$Total;
?>
<tr>
  <td><?php echo $_SESSION["strProductID"][$i]; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["price"]; ?></td>
  <td><?php echo $_SESSION["strQty"][$i]; ?></td>
  <td><?php echo number_format($Total,2); ?></td>
  <td><a href="order_delete.php?Line=<?php echo $i; ?>" class="btn btn-danger">ลบ</a></td>
</tr>
<?php
     } 
      $_SESSION["num"] = $_SESSION["strQty"][$i];
  }
?>
</table>
 <h2>รวมเป็นเงินทั้งสิ้น <?php echo number_format($SumTotal, 2); ?></h1>
 
 <?php
   if($SumTotal > 0){
     echo"<a href='checkout.php' class='btn btn-success'> Checkout </a>";
   }

 ?>

</div>