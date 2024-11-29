<?php
//lấy cái id cần update
$id = $_GET['sid'];
//ket noi
require_once 'ketnoi.php';

//câu lệnh lấy thông tin về về sản phẩm có id = $id
$edit_sql = "SELECT *FROM products where id = $id";
$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/df7bf82e3d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>FORM Thêm Nhạc</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
      <div class="form-group">
        <label for="sanpham">Sản Phẩm</label>
        <input type="text" id="sanpham" class="form-control" name="sanpham" value="<?php echo $row['sanpham']?>">
      </div>
      <div class="form-group">
        <label for="price">Giá</label>
        <input type="text" name="price" id="price" class="form-control" value="<?php echo $row['price']?>">
      </div>
      <button type="submit" class="btn btn-primary">Cập nhập</button>
    </form>
  </div>
  
</body>

<footer>
    <div class="footer">
        <h2>TLU'S MUSIC GARDEN</h2>
    </div>
</footer>
<script src="main.js"></script>
</html>
