
    <?php
       include "header.php";
    ?>
    <div class="container">
        <h1 class="text-center">แจ้งชำระเงิน</h1>
        <form action="blog_insert.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    ชื่อผู้ชำระเงิน
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    ชื่อธนาคาร
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    วันที่ และ เวลา
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    หมายเลขสั่งซื้อ
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" />
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
                <input type="submit" value="บันทึก" class="btn btn-info" />
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