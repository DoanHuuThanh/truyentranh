<?php
 $sql_lietke_sanpham = "SELECT*FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.MaDanhMuc = tbl_danhmuc.MaDanhMuc ";
 $query_lietke_sanpham =  mysqli_query($conn, $sql_lietke_sanpham);
?>

<div class="container"> 
<table class="bordered-table" border="1"  >
    <tr>
      <th>Mã Truyện</th>
      <th>Tên Truyện</th>
      <th>Tác Giả</th>
      <th>NXB</th>
      <th>Đơn Giá</th>
      <th>Số Lượng</th>
      <th>Số Trang</th>
      <th >Mô Tả</th>
      <th>Danh Mục</th>
      <th>Hình Ảnh</th>
      <th>Tình Trạng</th>
    </tr>
    <?php
     $i = 0;
     while($row = mysqli_fetch_array($query_lietke_sanpham)) {
        $i++;
     ?>
    <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row['TenTruyen'] ?></td>
       <td><?php echo $row['TacGia'] ?></td>
       <td><?php echo $row['NXB'] ?></td>
       <td><?php echo $row['DonGia'] ?></td>
       <td><?php echo $row['SoLuong'] ?></td>
       <td><?php echo $row['SoTrang'] ?></td>
       <td ><?php echo $row['MoTa'] ?></td>
       <td><?php echo $row['TenDanhMuc'] ?></td>
       <td><img style="width: 100px;" src="./quanlysanphamcp/uploads/<?php echo $row['HinhAnh'] ?>"></td>
       <td><?php echo $row['TinhTrang'] ?></td>
       <td>
       <a href="?action=sanpham&query=sua&matruyen=<?php echo $row['MaTruyen'] ?>">Sửa</a> | <a href="./quanlysanphamcp/xuli.php?matruyen=<?php echo $row['MaTruyen'] ?>">Xóa</a> 
       </td>
    </tr>
    <?php
    }
    ?>

</table>
</div>