<?php
 session_start(); 
include "connect.php";

 $Total = 0;
 $SumTotal = 0;
 $sql = "INSERT INTO tbl_orders(order_date, name, address, tel, email) 
         VALUES(date('Y-m-d H:i:s'), '$_POST[name]', '$_POST[address]', '$_POST[tel]', '$_POST[email]' )";
 $result = mysqli_query($conn,$sql);
 
 if(!$result){
   echo $conn-> error;
   exit();
 }

 $strOrderID= mysqli_insert_id($conn); //กำหนดค่า order id
 for($i=0; $i<=(int)$_SESSION["intLine"]; $i++){
    if($_SESSION["strProductID"][$i] != ""){
        $sql= "INSERT INTO tbl_orderdetail(order_id, product_id, qty)
               VALUES('$strOrderID', '$_SESSION[strProductID][$i]', $_SESSION[strQty][$i])";
        $result = mysqli_query($conn, $sql);
    }
    session_detroy(); 

 }



?>