<?php
// Kết nối MySQL mà không chỉ định cổng
$conn = mysqli_connect("localhost", "root", "", "music");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
