<div class="row row-cols-1 row-cols-md-4 g-3">
    <?php
        include "connect.php";
        $sql = "SELECT * FROM tbl_products";
        $result = mysqli_query($conn , $sql);
        while($row=mysqli_fetch_assoc($result)){
    ?>

    <div class="col">
        <div class="card">
            <img src="<?php echo $row[img]; ?>" class="card-img-top" />
            <div class="card-body">
                <h5 class="card-title"> <?php echo "ชื่อสินค้า $row[name] "; ?></h5>
                <p class="card-text">
                    <?php
                        echo "ราคา $row[price] บาท <br />";
                        echo "จำนวนสินค้าในคลัง $row[stock] <br />";
                        echo "$row[description] <br />";
                        echo "$row[cat_name] <br />"; 
                    ?>
                    <button class="btn btn-success" >สั่งซื้อสินค้า</button>
                </p>
            </div>
        </div>
    </div>

<?php
    }
?>
</div>