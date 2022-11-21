<?php
  session_start();
  include "connect.php";
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
       $product_id=$_GET['product_id'];
       $sql = "SELECT * FROM tbl_products WHERE product_id='$product_id' ";
       $result=mysqli_query($conn, $sql);
       $row=mysqli_fetch_array($result);
    ?>
    
    <div class="container-fluid col-md-6">
        <form action="product_update.php?product_id=<?= $product_id ?>" method="post" enctype="multipart/form-data"><br />
            <div class="row mb-2">
                <div class="col-md-3">
                    ชื่อสินค้า
                </div>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?= $row['name']; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    ราคา
                </div>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" value="<?= $row['price'] ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    คงเหลือ
                </div>
                <div class="col-md-9">
                    <input type="text" name="stock" class="form-control"  value="<?= $row['stock'] ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    ประเภทสินค้า
                </div>
                <div class="col-md-9">
                    <select name="cat_name" class="form-control" >
                        <?php
                        echo"<option value='$row[cat_name]'>$row[cat_name]</option>";     
                        $sql2 = "SELECT * FROM tbl_category";
                        $result2 = mysqli_query($conn, $sql2);
                        while($row2=mysqli_fetch_array($result2)){
                           echo"<option value='$row2[cat_name]'>$row2[cat_name]</option>";     
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    รายละเอียด
                </div>
                <div class="col-md-9">
                    <textarea rows=" 5" cols="50" name="description" class="form-control" ><?= $row['description']; ?></textarea>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    แทรกรูป
                </div>
                <div class="col-md-9">
                    <img src="<?= $row['img']; ?>" class="img-fluid"/>
                    <input type="file" name="img" class="form-control" />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="แก้ไข" class="btn btn-primary btn-lg" />
            </div>
        </form>
    </div>

</body>

</html>