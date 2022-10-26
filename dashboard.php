<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
      include "navbar.php";
    ?>

    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

        </div>
        <div class="col-sm-9">

            <h1> <?php echo "$_SESSION[email]";  ?> </h1>
            <p> <?php echo "$_SESSION[school]"; ?> </p>
            <p>เขาเป็น <?php echo "$_SESSION[status]"; ?></p>

        </div>

    </div>
</body>

</html>