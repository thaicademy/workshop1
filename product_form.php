<?php
      include "header.php";
    ?>

<div class="container-fluid col-md-8">
    <form action="product_insert.php" method="post" enctype="multipart/form-data"><br />
        <div class="row mb-2">
            <div class="col-md-2">
                ชื่อสินค้า
            </div>
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                ราคา
            </div>
            <div class="col-md-10">
                <input type="text" name="price" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                คงเหลือ
            </div>
            <div class="col-md-10">
                <input type="text" name="stock" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                ประเภทสินค้าหลัก
            </div>
            <div class="col-md-10">
                <select name="cat_name" class="form-control" id="category">
                    <?php
                        $sql = "SELECT * FROM tbl_category";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)){
                           echo"<option value='$row[cat_name]'>$row[cat_name]</option>";     
                        }
                        ?>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                ประเภทสินค้าย่อย
            </div>
            <div class="col-md-10">
                <!-- <select name="sub_name" class="form-control">
                    <?php
                       // $sql2 = "SELECT * FROM tbl_subcategory WHERE cat_name='$row[cat_name]' ";
                       // $result2 = mysqli_query($conn, $sql2);
                       // while($row2=mysqli_fetch_array($result2)){
                       //    echo"<option value='$row2[sub_name]'>$row2[sub_name]</option>";     
                       // }
                        ?>
                </select> -->
                <select name="sub_name" class="form-control" id="category">
                        <option>เลือกประเภทสินค้าย่อย</option>
                </select>

            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-2">
                รายละเอียด
            </div>
            <div class="col-md-10">
                <textarea rows=" 5" cols="50" name="description" class="form-control" id="editor"> </textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-2">
                แทรกรูป
            </div>
            <div class="col-md-10">
                <input type="file" name="img" class="form-control" />
            </div>
        </div>
        <div class="d-grid">
            <input type="submit" value="บัณทึก" class="btn btn-primary btn-lg" />
        </div>
    </form>
</div>

<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

<?php
       include "footer.php";
?>