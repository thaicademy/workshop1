<?php
  session_start();
  include "connect.php";
  include "navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
           <form>
               ชื่อผู้ซื้อ
               <input type="text" name="name" class="form-control" value="<?php echo $_SESSION[firstname] ." ". $_SESSION[lastname]; ?>" />
               อีเมลผู้ซื้อ 
               
            </form>
        </div>
        <div class="col-md-7">
            <table class="table table-responsive">
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวนที่สั่ง</th>
                    <th>เป็นเงิน</th>
                </tr>

            </table>
        </div>
    </div>

</div>