<?php
 include "header.php";

 $id = $_GET['id'];


 $sql = "SELECT * FROM tbl_blogs WHERE id='$id' ";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
?>

<div class="container pt-2">
    <div class="card mb-3">
            <div class="col-md-12">
                <img src="./images/blog/<?= $row['img'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title']; ?></h5>
                     <?= $row['detail']; ?>
                </div>
            </div>
    </div>
</div>

<?php
       include "footer.php";
   ?>
