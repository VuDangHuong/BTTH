<?php
//nhan du lieu tu form
$id = $_POST['sid'];
$sp = $_POST['sanpham'];
$price = $_POST['price'];

//ket noi csdl
require_once 'ketnoi.php';
//viet lenh sql de them csdl
$updatesql = "UPDATE products  SET sanpham='$sp', price='$price' where id = $id";
//echo $updatesql; exit;

//thực thi câu lệnh thêm
if(mysqli_query($conn,$updatesql)){
    //trở về trang liệt kể
header("Location: lietke.php");
};

//in thông báo thành công
//echo "<h1>Thêm thành công</h1>";
?>