<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
      include "navbar.php";
    ?>

    <div class="container-fluid col-md-6">
        <form action="product_insert.php" method="post" enctype="multipart/form-data"><br />
            <div class="row mb-2">
                <div class="col-md-3">
                    name
                </div>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    price
                </div>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    stock
                </div>
                <div class="col-md-9">
                    <input type="text" name="stock" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    cat_name
                </div>
                <div class="col-md-9">
                    <input type="text" name="cat_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    description
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

</body>

</html>