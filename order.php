<?php
ob_start();
session_start();

if(!isset($_SESSION["intLine"])){
    $_SESSION["intLine"] = 0;
    $_SESSION["strProductID"][0] = $_GET["product_id"];
    $_SESSION["strQty"][0] = 1; //จำนวนที่สั่ง 1 หน่วย
     echo "สั่งสินค้าเรียบร้อย";
    header("Location: order_list.php");
}else{
    $key = array_search($_GET["product_id"], $_SESSION["strProductID"]);
    if((string)$key != ""){
       $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key]+1;
    }else{
        $_SESSION["intLine"] = $_SESSION["intLine"]+1;
        $intNewLine = $_SESSION["intLine"];
        $_SESSION["strProductID"][$intNewLine] = $_GET["product_id"];
        $_SESSION["strQty"][$intNewLine] = 1;  //จำนวนที่สั่ง
    }
    echo "สั่งสินค้าเรียบร้อยแล้ว";
    header("Location: order_list.php");
}

?>