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

    <div class="container-fluid col-md-5">
        <h1 class="text-center"> Register </h1>
        <form action="reg_insert.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    First Name
                </div>
                <div class="col-md-9">
                    <input type="text" name="firstname" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    Last Name
                </div>
                <div class="col-md-9">
                    <input type="text" name="lastname" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    E-mail
                </div>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    Password
                </div>
                <div class="col-md-9">
                    <input type="password" name="password" class="form-control"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    Address
                </div>
                <div class="col-md-9">
                    <textarea rows="5" cols="50" name="address" class="form-control"></textarea>
                </div>
            </div>

            <input type="submit" value="ลงทะเบียน" class="btn btn-primary" />

        </form>
    </div>

</body>

</html>