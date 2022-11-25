<?php
  include "header.php";
?>

<div class="container-fluid">
    <h1>แสดงบล็อก</h1>
    <div class="row row-cols-1 row-cols-md-4 g-2">



        <?php
      include "connect.php";
      $sql = "SELECT * FROM tbl_blogs";    //ดึงข้อมูลทั้งหมด tbl_blogs
      $result = mysqli_query( $conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo $row[img]; ?>" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title"> <?php echo "$row[title]"; ?></h5>
                    <p class="card-text">
                        <?php
                               echo "$row[detail]";
                            ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
      }
  ?>

    </div>
</div>
<?php
       include "footer.php";
   ?>