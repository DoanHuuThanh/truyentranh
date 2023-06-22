<div class="container"> 
<form method='POST' action="./quanlysanphamcp/xuli.php" enctype="multipart/form-data">
<table class="bordered-table" border="1"  >
    <tr>
      <th>Tên Truyện</th>
      <th>
          <input type="text" name="tentruyen" class="styled-input">
      </th>
    </tr>
    <tr>
      <th>Tác Giả</th>
      <th>
          <input type="text" name="tacgia" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>NXB</th>
      <th>
          <input type="text" name="nxb" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Đơn Giá</th>
      <th>
          <input type="text" name="dongia" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Số Lượng</th>
      <th>
          <input type="text" name="soluong" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Số Trang</th>
      <th>
          <input type="text" name="sotrang" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Mô Tả</th>
      <th>
      <textarea name="mota" rows="4" class="styled-input"></textarea>  
      </th>
    </tr> 
    <tr>
      <th>Danh Mục</th>
      <th>
      <select class="styled-select" name="danhmuc">
            <?php
              $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY MaDanhMuc ASC";
              $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
              while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
            <option value="<?php echo $row_danhmuc['MaDanhMuc'] ?>"><?php echo $row_danhmuc['TenDanhMuc'] ?></option>
            <?php
              }
              ?>
            
         </select>
      </th>
    </tr> 
    <tr>
      <th>Hình Ảnh</th>
      <th>
          <input type="file" name="hinhanh" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Tình Trạng</th>
      <th>
         <select class="styled-select" name="tinhtrang">
            <option value="1">Còn Hàng</option>
            <option value="0">Hết Hàng</option>
         </select>
      </th>
    </tr> 
    <tr> 
      <th colspan="2"><input type="submit" name="themsanpham" value="Thêm Sản Phẩm" class="styled-button"></th>
    </tr>
</table>
</form>
</div>