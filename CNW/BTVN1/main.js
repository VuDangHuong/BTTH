
  function showEditModal(id, sanpham, price) {
    // Gán dữ liệu vào modal
    document.getElementById('editId').value = id;
    document.getElementById('editSanpham').value = sanpham;
    document.getElementById('editPrice').value = price;

    // Hiển thị modal
    $('#editModal').modal('show');
  }

