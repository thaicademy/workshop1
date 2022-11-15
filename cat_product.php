<?php    
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
      include "navbar.php";
      $catname= $_GET['cat_name'];
   ?>
    <div class="container-fluid">
        <h1>ประเภทสินค้า : <?= $catname; ?> </h1> 
        <div class="row row-cols-1 row-cols-md-4 g-4">
     
  <?php
     include "connect.php";
     $sql = "SELECT * FROM tbl_products WHERE cat_name='$catname' ";
     $result = mysqli_query($conn , $sql);
     while($row=mysqli_fetch_assoc($result)){
?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $row[img]; ?>" class="card-img-top" style="max-height: 100px; object-fit: cover;" />
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo "$row[name] "; ?></h5>
                        <p class="card-text">
                            <?php
                               echo "ราคา $row[price] บาท <br />";
                               echo "คงเหลือ $row[stock] <br />";
                               echo "$row[description] <br />";
                               echo "$row[cat_name] <br />"; 
                               if($_SESSION['status']== 'admin'){
                                  echo "<a href='product_edit.php' class='btn btn-info'>แก้ไข</a> ";
                                  echo "<a href='product_delete.php?product_id=$row[product_id] && img=$row[img]' class='btn btn-danger'>ลบ</a>";
                               }
                            ?>
                             <a href="order.php?product_id=<?php echo $row[product_id]; ?>" class="btn btn-success" >สั่งซื้อสินค้า</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
    }
?>
        </div>
    </div>
</body>

</html>