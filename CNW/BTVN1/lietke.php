<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê sinh viên</title>
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
    <div class ="container">
    <h1>Danh sách âm nhạc</h1>
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Thêm mới
    </button>
    </br>
    <!--<a href="index.html" class="btn btn-success">Thêm mới</a> -->
    <table class="table">
    <thead>
      <tr>
        <th>Sản Phẩm</th>
        <th>Giá</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
        //ketnoi
        require_once 'ketnoi.php';
        //câu lệnh
        $lietke_sql = "SELECT *FROM products";
        //thuc thi câu lệnh
        $result = mysqli_query($conn, $lietke_sql);
        //duyệt qua result và in ra
        while($r = mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
            <td><?php echo $r['sanpham'];?></td>
            <td><?php echo $r['price']."VND";?></td>
            <td>
            <button type="button" class="btn btn-primary" onclick="showEditModal(<?php echo $r['id']; ?>, '<?php echo $r['sanpham']; ?>', '<?php echo $r['price']; ?>')">
                <i class="fa-regular fa-pen-to-square"></i>
            </button>
            </td>

            <td><a onclick="return confirm('Bạn muốn xóa sản phẩm này không?');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
    </table>
    </div>
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <h4>FORM Thêm Nhạc</h4>
      <form action="them.php" method="post">
      <div class="form-group">
        <label for="sanpham">Sản Phẩm</label>
        <input type="text" id="sanpham" class="form-control" name="sanpham">
      </div>
      <div class="form-group">
        <label for="price">Giá</label>
        <input type="text" name="price" id="price" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Thêm nhạc</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Sửa -->
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Chỉnh sửa sản phẩm</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="update.php" method="post">
          <input type="hidden" id="editId" name="sid">
          <div class="form-group">
            <label for="editSanpham">Sản Phẩm</label>
            <input type="text" id="editSanpham" class="form-control" name="sanpham">
          </div>
          <div class="form-group">
            <label for="editPrice">Giá</label>
            <input type="text" id="editPrice" class="form-control" name="price">
          </div>
          <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>

    </div>
  </div>
</div>

</body>
<script src="main.js"></script>
</html>
