<?php
 $sql_sua_sanpham = "SELECT*FROM tbl_sanpham WHERE MaTruyen='$_GET[matruyen]' ";
 $query_sua_sanpham =  mysqli_query($conn, $sql_sua_sanpham);
?>
<div class="container"> 
<form method='POST' action="./quanlysanphamcp/xuli.php?matruyen=<?php echo $_GET['matruyen']?>" enctype="multipart/form-data">
<table class="bordered-table" border="1"  >
<?php
     $i = 0;
     while($dong = mysqli_fetch_array($query_sua_sanpham)) {
        $i++;
     ?>
  <tr>
      <th>Tên Truyện</th>
      <th>
          <input type="text"  value="<?php echo $dong['TenTruyen']?>" name="tentruyen" class="styled-input">
      </th>
    </tr>
    <tr>
      <th>Tác Giả</th>
      <th>
          <input type="text"  value="<?php echo $dong['TacGia']?>" name="tacgia" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>NXB</th>
      <th>
          <input type="text"  value="<?php echo $dong['NXB']?>" name="nxb" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Đơn Giá</th>
      <th>
          <input type="text"  value="<?php echo $dong['DonGia']?>" name="dongia" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Số Lượng</th>
      <th>
          <input type="text"  value="<?php echo $dong['SoLuong']?>" name="soluong" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Số Trang</th>
      <th>
          <input type="text"  value="<?php echo $dong['SoTrang']?>" name="sotrang" class="styled-input">
      </th>
    </tr> 
    <tr>
      <th>Mô Tả</th>
      <th>
      <textarea name="mota"   rows="4" class="styled-input"><?php echo $dong['MoTa']?></textarea>  
      </th>
    </tr> 
    <tr>
    <tr>
      <th>Danh Mục</th>
      <th>
      <select class="styled-select" name="danhmuc">
            <?php
              $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY MaDanhMuc ASC";
              $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
              while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                if($row_danhmuc['MaDanhMuc']==$dong['MaDanhMuc']) {
            ?>
            <option selected value="<?php echo $row_danhmuc['MaDanhMuc'] ?>"><?php echo $row_danhmuc['TenDanhMuc'] ?></option>
            <?php
              } else {  
                ?>
                <option value="<?php echo $row_danhmuc['MaDanhMuc'] ?>"><?php echo $row_danhmuc['TenDanhMuc'] ?></option>
                <?php
              }
            } 
              ?>
              
         </select>
      </th>
    </tr> 
    <tr>
      <th>Hình Ảnh</th>
      <th>
          <input type="file"  name="hinhanh" class="styled-input">
          <img style="width: 50px;" src="./quanlysanphamcp/uploads/<?php echo $dong['HinhAnh'] ?>">
      </th>
    </tr> 
    <tr>
      <th>Tình Trạng</th>
      <th>
         <select class="styled-select"  name="tinhtrang">
         <?php
            if( $dong['TinhTrang']==1) {
                ?>
            <option value="1" Selected>Còn Hàng</option>
            <option value="0">Hết Hàng</option>
            <?php
            }
         ?>
         
         <?php
            if( $dong['TinhTrang']==0) {
                ?>
            <option value="1">Còn Hàng</option>
            <option value="0" Selected>Hết Hàng</option>
            <?php
            }
         ?>
         </select>
      </th>
    </tr> 
    <tr> 
      <th colspan="2"><input type="submit" name="suasanpham" value="Sửa Sản Phẩm" class="styled-button"></th>
    </tr>
<?php
    }
    ?>
</form>
</div>