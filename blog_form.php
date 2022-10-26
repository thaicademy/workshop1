<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>

<body>
    <?php
       include "navbar.php";
    ?>
    <div class="container col-md-6">
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
                    <textarea rows="" cols="" name="detail" class="form-control"></textarea>
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
</body>

</html>