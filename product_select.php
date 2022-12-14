
    <?php
      include "header.php";
   ?>
    <div class="container-fluid">

        <h1>แสดงสินค้า 
        <?php
        if($_SESSION['status'] == 'admin'){
            echo"<a href='product_form.php' class='btn btn-primary'> เพิ่มสินค้า </a>";
        }
        ?>
        </h1>
       
         <div class="row row-cols-1 row-cols-md-4 g-4 pt-2"> 
     
  <?php
     include "connect.php";
     $sql = "SELECT * FROM tbl_products";
     $result = mysqli_query($conn , $sql);
     while($row=mysqli_fetch_assoc($result)){
?>
            <div class="col">
                <div class="card h-100">
                    <img src="./images/products/<?php echo $row[img]; ?>" class="card-img-top" style="max-height: 100px; object-fit: cover;" /> 
                    
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo "<a href='product_detail.php?product_id=$row[product_id]'> $row[name] </a>"; ?></h5>
                        <p class="card-text">
                            <?php
                               echo "ราคา $row[price] บาท <br />";
                               echo "คงเหลือ $row[stock] <br />";
                               echo "ประเภทสินค้า: $row[cat_name] <br />"; 
                               $desc = $row['description'];
                               if(strlen($desc) > 250){
                                 $desc = substr($desc,0,250)."..<a href='product_detail.php?product_id=$row[product_id]'>Read more</a>";
                                 echo "$desc";
                                }  
                            ?>
                        </p>
                        <p>
                            <?php
                             if($_SESSION['status']== 'admin'){
                                  echo "<a href='product_edit.php?product_id=$row[product_id]&&img=$row[img]' class='btn btn-info btn-sm'>แก้ไข</a> ";
                                  echo "<a href='product_delete.php?product_id=$row[product_id]&&img=$row[img]' class='btn btn-danger btn-sm'>ลบ</a>";
                               }
                            ?>
                            <a href="order.php?product_id=<?php echo $row[product_id]; ?>" class="btn btn-success btn-sm" >สั่งซื้อสินค้า</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
    }
?>
        </div>
    </div>
    
    <?php
       include "footer.php";
   ?>
