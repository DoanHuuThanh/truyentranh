<?php
 $sql_lietke_admin= "SELECT*FROM tbl_admin ";
 $query_lietke_admin =  mysqli_query($conn, $sql_lietke_admin);
?>

<h2 style="text-align:center">Tài Khoản Admin</h2>
<div class="container"> 
<table class="bordered-table" border="1"  >
    <tr>
      <th>ID</th>
      <th>Tên Tài Khoản</th>
      <th>Mật Khẩu</th>
      <th>Status</th>
      <th>Quản Lý</th>
    </tr>
    <?php
     $i = 0;
     while($row = mysqli_fetch_array($query_lietke_admin)) {
        $i++;
     ?>
    <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row['AdminUsername'] ?></td>
       <td><?php echo $row['AdminPassword'] ?></td>
       <td><?php echo $row['AdminStatus'] ?></td>
       <td>
       <a href="?action=taikhoan&query=sua&id_taikhoan=<?php echo $row['ID_Admin'] ?>">Sửa</a> | <a href="./quanlytaikhoanadmincp/xuli.php?id_taikhoan=<?php echo $row['ID_Admin'] ?>">Xóa</a> 
       </td>
    </tr>
    <?php
    }
    ?>

</table>
</div>