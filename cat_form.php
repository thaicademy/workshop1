<?php
      include "header.php";
    ?>
    <div class="container-fluid col-md-6">
        <form action="cat_insert.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    ประเภทสินค้า
                </div>
                <div class="col-md-9">
                    <input type="text" name="cat_name" class="form-control" />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="บึกทึกข้อมูล" class="btn btn-success" />
            </div>
        </form>
    </div>

    
 <?php
       include "footer.php";
   ?>
