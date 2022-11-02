<?php
ob_start();
session_start();

if(!isset($_SESSION["intLine"])){
    $_SESSION["intLine"] = 0;
    $_SESSION["product_id"][0] = $_GET["pid"];
    $_SESSION["qty"][0] = 1; //จำนวนที่สั่ง
     echo "สั่งสินค้าเรียบร้อย";
    header("Location: order_list.php");
}else{
    $key = array_search($_GET["pid"], $_SESSION["product_id"]);
    if((string)$key != ""){
       $_SESSION["qty"][$key] = $_SESSION["qty"][$key]+1;
    }else{
        $_SESSION["intLine"] = $_SESSION["intLine"]+1;
        $intNewLine = $_SESSION["intLine"];
        $_SESSION["product_id"][$intNewLine] = $_GET["pid"];
        $_SESSION["qty"][$intNewLine] = 1; //จำนวนที่สั่ง
    }
    echo "สั่งสินค้าเรียบร้อยแล้ว";
    header("Location: order_list.php");
}

?>