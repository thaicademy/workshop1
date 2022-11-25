<?php
 include "header.php";

 $product_id = $_GET['product_id'];


 $sql = "SELECT * FROM tbl_products WHERE product_id='$product_id' ";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
?>

<div class="container pt-2">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="./images/products/<?= $row['img'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['name']; ?></h5>
                    <p class="card-text">ราคา <?= $row['price']; ?> บาท</p>
                    <p class="card-text">คงเหลือ <?= $row['stock']; ?></p>
                    <p class="card-text">ประเภทสินค้า <?= $row['cat_name']; ?></p>
                     <?= $row['description']; ?>
                    <a href="order.php?product_id=<?php echo $row[product_id]; ?>" class="btn btn-success" >สั่งซื้อสินค้า</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
       include "footer.php";
   ?>
