
    <?php
       include "header.php";
    ?>
    <div class="container">
        <h1 class="text-center">Blogs</h1>
        <form action="blog_insert.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    หัวเรื่อง
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    เนื้อหา
                </div>
                <div class="col-md-9">
                    <textarea rows="" cols="" name="detail" class="form-control" id="editor"></textarea>
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