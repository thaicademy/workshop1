
    <?php
      include "header.php";
    ?>

    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group list-group-flush">
                <?php if($_SESSION["status"] == "admin"){ ?>
                    <li class="list-group-item"><a href="cat_form.php"> เพิ่มประเภทสินค้า </a></li>
                <?php } ?>    
                <?php if($_SESSION["status"] == "admin"){ ?>
                    <li class="list-group-item"><a href="product_form.php"> เพิ่มสินค้า </a></li>
                <?php } ?>
                <?php if($_SESSION["status"] == "admin"){ ?>
                    <li class="list-group-item"><a href="blog_form.php"> เพิ่มบล็อก </a></li>
                <?php } ?>
            </ul>

        </div>
        <div class="col-sm-9">
           <h2> ยินดีต้อรับคุณ <?php echo "$_SESSION[firstname] $_SESSION[lastname]";  ?> </h2>

            <p> <?php echo "$_SESSION[email]";  ?> </p>
            <p> <?php echo "$_SESSION[school]"; ?> </p>
            <p>สถานะภาพ : <?php echo "$_SESSION[status]"; ?></p>
            <p>ที่อยู่ <?php echo "$_SESSION[address]"; ?></p>

        </div>

    </div>
    <?php
        include "footer.php";
    ?>
