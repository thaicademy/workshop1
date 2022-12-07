<?php
  include "header.php";
?>

<div class="container-fluid">
    <h1>แสดงบล็อก
        <?php
        if($_SESSION['status'] == 'admin'){
            echo"<a href='blog_form.php' class='btn btn-primary'> เพิ่มบล็อก </a>";
        }
    ?>
    </h1>

    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
      $sql = "SELECT * FROM tbl_blogs";    //ดึงข้อมูลทั้งหมด tbl_blogs
      $result = mysqli_query( $conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="col">
            <div class="card">
                <img src="./images/blog/<?php echo $row[img]; ?>" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title"> <?php echo "<a href='blog_detail.php?id=$row[id]'>$row[title]</a>"; ?></h5>
                    <p class="card-text">
                        <?php
                               echo "$row[detail]";
                        ?>
                    </p>
                    <p>
                    <?php
                        if($_SESSION['status']== 'admin'){
                          echo "<a href='blog_edit.php?id=$row[id]&&img=$row[img]' class='btn btn-info btn-sm'>แก้ไข</a> ";
                          echo "<a href='blog_delete.php?id=$row[id]&&img=$row[img]' class='btn btn-danger btn-sm'>ลบ</a>";
                        }
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