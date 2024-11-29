<?php
// lấy dữ liêu ud cần xóa
$product_id = $_GET['sid'];
//echo $id
//ket noi
require_once 'ketnoi.php';
//cau lenh sql
$xoa_sql = "DELETE FROM products where id=$product_id";
mysqli_query($conn,$xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kể
header("Location: lietke.php");
?>