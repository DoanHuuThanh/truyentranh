<?php
 $sql_lietke_danhmucsp = "SELECT*FROM tbl_danhmuc ORDER BY ThuTu ASC";
 $query_lietke_danhmucsp =  mysqli_query($conn, $sql_lietke_danhmucsp);
?>

<div class="container"> 
<table class="bordered-table" border="1"  >
    <tr>
      <th>Mã Danh Mục</th>
      <th>Tên Danh Mục</th>
      <th>Thứ Tự</th>
      <th>Quản Lý</th>
    </tr>
    <?php
     $i = 0;
     while($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
     ?>
    <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row['TenDanhMuc'] ?></td>
       <td><?php echo $row['ThuTu'] ?></td>
       <td>
       <a href="?action=quanlydanhmucsanpham&query=sua&madanhmuc=<?php echo $row['MaDanhMuc'] ?>">Sửa</a> | <a href="./quanlydanhmuccp/xuli.php?madanhmuc=<?php echo $row['MaDanhMuc'] ?>">Xóa</a> 
       </td>
    </tr>
    <?php
    }
    ?>

</table>
</div>