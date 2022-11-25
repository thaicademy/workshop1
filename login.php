
    <?php
      include "header.php";
      
    ?>

    <div class="container-fluid col-md-5">
        <h1 class="text-center"> Login </h1>
        <form action="chk_login.php" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col-md-3">
                    Email :
                </div>
                <div class="col-md-9">
                    <input type="text" name="email" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    Password :
                </div>
                <div class="col-md-9">
                    <input type="password" name="password" class="form-control" />
                </div>
            </div>
            <div class="d-grid">
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-primary" />
            </div>
        </form>

    </div>


    <?php
       include "footer.php";
   ?>
