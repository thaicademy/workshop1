<?php
  include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
           <form action="checkout_save.php" method="post" enctype="multipart/form-data">
               ชื่อผู้ซื้อ
               <input type="text" name="fullname" class="form-control" value="<?php echo $_SESSION[firstname] ." ". $_SESSION[lastname]; ?>" />
               อีเมลผู้ซื้อ 
               <input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" />
               ที่อยู่ผู้ซื้อ
               <textarea name="address" class="form-control"> <?php echo $_SESSION['address']; ?> </textarea>
               <input type="submit" value=" ยืนยัน " class="btn btn-primary" />
            </form>
        </div>
        <div class="col-md-7">
            <table class="table table-responsive">
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวนที่สั่ง</th>
                    <th>เป็นเงิน</th>
                </tr>

<?php
   $Total = 0;  
   $SumTotal = 0;
   for($i=0; $i<=(int)$_SESSION["intLine"]; $i++){
     if($_SESSION["strProductID"][$i] != ""){
        $sql = "SELECT * FROM tbl_products WHERE product_id = ' ".$_SESSION["strProductID"][$i]." ' ";
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
</tr>
<?php
     } 
  }
?>
            </table>
            <h3>รวมเป็นเงิน <?php echo number_format($SumTotal, 2); ?></h3>
        </div>
    </div>

    <a href="product_select.php"> ย้อนไปสั่งซื้อสินค้า </a>

</div>

<form name="checkoutForm" method="POST" action="checkout.php">
  <script type="text/javascript" src="https://cdn.omise.co/omise.js"
    data-key="pkey_5qp1fawjwx0kvenwavp"
    data-image="./images/picture.jpg"
    data-frame-label="Merchant site name"
    data-button-label="Pay now"
    data-submit-label="Submit"
    data-location="no"
    data-amount="<?php echo number_format($SumTotal,2); ?>"
    data-currency="thb"
    >
  </script>
  <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
</form>


<?php
       include "footer.php";
   ?>
