<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>

</head>

<body>
    <script language='javascript'>
    document.onselectstart = new Function('return false');

    function ds(e) {
        return false;
    }

    function ra() {
        return true;
    }
    document.oncontextmenu = function() {
        return false
    };
    </script>

    <?php
       include "navbar.php";
    ?>

    <div class="container-fluid">
        <h1 class="abc">เกี่ยวกับเรา</h1>

        <div class="row">
            <div class="col-md-4">
                <img src="./images/picture1.jpg" class="img-fluid " />
            </div>
            <div class="col-md-4">
                <img src="./images/picture2.jpg" class="img-fluid" />
            </div>
            <div class="col-md-4">
                <img src="./images/picture3.jpg" class="img-fluid" />
            </div>
        </div>

    </div>

    <script language='JavaScript'>
    if (top.location != self.location) {
        top.location = self.location
    }
    </script>
</body>

</html>