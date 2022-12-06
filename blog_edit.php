<?php
    include "header.php";
    $id = $_GET['id'];
    $sql= "SELECT * FROM tbl_blogs WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
?>
    <div class="container">
        <h1 class="text-center">Blogs</h1>
        <form action="blog_update.php?id=<?=$row[id] ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    หัวเรื่อง
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" value="<?=$row['title']; ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    เนื้อหา
                </div>
                <div class="col-md-9">
                    <textarea rows="" cols="" name="detail" class="form-control" id="editor"> <?=$row['detail']; ?></textarea>
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
                <input type="submit" value="แก้ไข" class="btn btn-info" />
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