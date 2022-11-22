<?php
      include "navbar.php";
?>
<div class="container-fluid col-md-6 pt-2">
    <form action="sub_insert.php" method="post" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col-md-3">
                ประเภทสินค้าหลัก
            </div>
            <div class="col-md-9">
              <select name="cat_name" class="form-control">
               <?php
               include "connect.php";
               $sql = "SELECT * FROM tbl_category";
               $result = mysqli_query($conn , $sql );
               while($row=mysqli_fetch_array($result )){
                 echo "<option value='$row[cat_name]'> $row[cat_name] </option>";
               }
               ?>
              </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                ประเภทสินค้าย่อย
            </div>
            <div class="col-md-9">
                <input type="text" name="sub_name" class="form-control" />
            </div>
        </div>
        <div class="d-grid">
            <input type="submit" value="บึกทึกข้อมูล" class="btn btn-success" />
        </div>
    </form>
</div>