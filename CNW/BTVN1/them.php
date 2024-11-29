<?php
//nhan du lieu tu form
$sp = $_POST['sanpham'];
$price = $_POST['price'];

//ket noi csdl
require_once 'ketnoi.php';
//viet lenh sql de them csdl
$themsql = "INSERT INTO products(sanpham,price) VALUES ('$sp', '$price')";
//echo $themsqp; exitt;

//thực thi câu lệnh thêm
if(mysqli_query($conn,$themsql)){
    //trở về trang liệt kể
header("Location: lietke.php");
};

//in thông báo thành công
//echo "<h1>Thêm thành công</h1>";
?>