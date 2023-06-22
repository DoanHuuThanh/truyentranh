<?php
 $sql_lietke_taikhoankhachhang = "SELECT *FROM tbl_taikhoankhachhang ";
 $query_lietke_taikhoankhachhang=  mysqli_query($conn, $sql_lietke_taikhoankhachhang);
?>

<div class="container"> 
<table class="bordered-table" border="1"  >
    <tr>
      <th>Mã Khách Hàng</th>
      <th>Tên Tài Khoản</th>
      <th>Mật Khẩu</th>
      <th>Họ Tên</th>
      <th>Năm Sinh</th>
      <th>Số Điện Thoại</th>
      <th>Địa Chỉ</th>
      <th>Quản Lý</th>
      
    </tr>
    <?php
     $i = 0;
     while($row = mysqli_fetch_array($query_lietke_taikhoankhachhang)) {
        $i++;
     ?>
    <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row['TenTaiKhoan'] ?></td>
       <td><?php echo $row['MatKhau'] ?></td>
       <td><?php echo $row['HoTen'] ?></td>
       <td><?php echo $row['NamSinh'] ?></td>
       <td><?php echo $row['SDT'] ?></td>
       <td><?php echo $row['DiaChi'] ?></td>    
       <td>
       <a href="?action=taikhoankhachangl&query=sua&id_khachang=<?php echo $row['ID_KhachHang'] ?>">Sửa</a> | <a href="./quanlytaikhoankhachhangcp/xuli.php?id_khachang=<?php echo $row['ID_KhachHang'] ?>">Xóa</a> 
       </td>
    </tr>
    <?php
    }
    ?>

</table>
</div>