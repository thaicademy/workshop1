<?php
include "connect.php";

$filename = $_FILES["img"]["name"];
$tempPath = $_FILES["img"]["tmp_name"];
$uploadPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . './images/blog/original' . DIRECTORY_SEPARATOR . $_FILES['img']['name'];
copy($tempPath, $uploadPath);

$sql = "INSERT INTO tbl_blogs (title, detail )
        VALUES ('$_POST[title]', '$_POST[detail]')";
$result = mysqli_query($conn, $sql);

$id = mysqli_insert_id($conn);
$ext = strtolower(end(explode('.', $filename)));
$newname = $id . '.' . $ext;

if ($result) {
  $sql2="UPDATE tbl_blogs SET img='$newname' WHERE id='$id'";
  mysqli_query($conn, $sql2);

//--- Resize img ----
if ($ext == "jpg") {
  $ori_img = imagecreatefromjpeg($uploadPath);
} else if ($ext == "png") {
  $ori_img = imagecreatefrompng($uploadPath);
} else if ($ext == "gif") {
  $ori_img = imagecreatefromgif($uploadPath);
}

$ori_size = getimagesize($uploadPath);
$ori_w = $ori_size[0];
$ori_h = $ori_size[1];

if ($ori_w >= $ori_h) {
  $new_w = 1000;
  $new_h = round(($new_w / $ori_w) * $ori_h);
} else {
  $new_h = 1000;
  $new_w = round(($new_h / $ori_h) * $ori_w);
}
$new_img = imagecreatetruecolor($new_w, $new_h);

imagecopyresampled($new_img, $ori_img, 0, 0, 0, 0, $new_w, $new_h, $ori_w, $ori_h);
imagestring($new_img, 0, 0, $new_h - 15, "ดินแดง1", $light);
if ($ext == "jpg") {
    imagejpeg($new_img, "./images/blog/$newname");
} else if ($ext == "png") {
    imagepng($new_img, "./images/blog/$newname");
} else if ($ext == "gif") {
    imagegif($new_img, "./images/blog/$newname");
}
imagedestroy($ori_img);
imagedestroy($new_img);
//--- จบ Resize img 

  echo "บันทึกเรียบร้อย";
  header("location: ./blog_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 // echo "ไม่สามารถบันทึกได้";
}

mysqli_close($conn);
?>