<?php
  session_start();
  include "connect.php";
?>

<!-- <link rel="stylesheet" href="./script/style.css" /> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">โรงเรียนฝึกอาชีพ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">ติดต่อเรา</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ประเภทสินค้า
          </a>
          <ul class="dropdown-menu">
         <?php
          $sql = "SELECT * FROM tbl_category";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){ 
         ?>
            <li><a class="dropdown-item" href="#"><?php echo"$row[cat_name]"; ?></a></li>
         <?php
          }
         ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product_select.php">สินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">บริการของเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog_select.php">บล็อก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order_list.php" class="position-relative">ตะกร้า 
             <span class="badge text-bg-danger"><?php echo $_SESSION[intLine]; ?></span>
          </a>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<?php
  if($_SESSION['email']){
?>
  <li class="nav-item"><a href="logout.php"  class="nav-link"> Logout </a></li>
  <li class="nav-item"><a href="profile.php"  class="nav-link"> Profile </a></li>
<?php
  }else{
?>
    <li class="nav-item"><a href="login.php"  class="nav-link"> Login </a></li>
    <li class="nav-item"><a href="register.php"  class="nav-link"> Register </a></li>
<?php
   }
?>
</ul>

    </div>
  </div>
</nav>

