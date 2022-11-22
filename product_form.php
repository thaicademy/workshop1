<?php
      include "navbar.php";
    ?>

<div class="container-fluid col-md-6">
    <form action="product_insert.php" method="post" enctype="multipart/form-data"><br />
        <div class="row mb-2">
            <div class="col-md-3">
                ชื่อสินค้า
            </div>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                ราคา
            </div>
            <div class="col-md-9">
                <input type="text" name="price" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                คงเหลือ
            </div>
            <div class="col-md-9">
                <input type="text" name="stock" class="form-control" />
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                ประเภทสินค้าหลัก
            </div>
            <div class="col-md-9">
                <select name="cat_name" class="form-control" >
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
            <div class="col-md-3">
                ประเภทสินค้าย่อย
            </div>
            <div class="col-md-9">
                <select name="sub_name" class="form-control" onChange="updateInterval(this)">
                    <?php
                        $sql2 = "SELECT * FROM tbl_subcategory WHERE cat_name='$row[cat_name]' ";
                        $result2 = mysqli_query($conn, $sql2);
                        while($row2=mysqli_fetch_array($result2)){
                           echo"<option value='$row2[sub_name]'>$row2[sub_name]</option>";     
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
                <textarea rows=" 5" cols="50" name="description" class="form-control"> </textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3">
                แทรกรูป
            </div>
            <div class="col-md-9">
                <input type="file" name="img" class="form-control" />
            </div>
        </div>
        <div class="d-grid">
            <input type="submit" value="บัณทึก" class="btn btn-primary btn-lg" />
        </div>
    </form>
</div>

<script>
function updateInterval(e) {
    var options = e.options
    var seconds = options[options.selectedIndex].value

    if (this.currentInterval)
        clearInterval(this.currentInterval)

    if (!isNaN(seconds))
        this.currentInterval = setInterval(
            function() {
                location.reload()
            },
            seconds * 1000
        )
}
</script>