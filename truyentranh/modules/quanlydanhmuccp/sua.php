<?php
 $sql_sua_danhmucsp = "SELECT*FROM tbl_danhmuc WHERE MaDanhMuc='$_GET[madanhmuc]' ";
 $query_sua_danhmucsp =  mysqli_query($conn, $sql_sua_danhmucsp);
?>

<div class="container"> 
<form method='POST' action="./quanlydanhmuccp/xuli.php?madanhmuc=<?php echo $_GET['madanhmuc']?>">
<table class="bordered-table" border="1"  >
<?php
     $i = 0;
     while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
        $i++;
     ?>
    <tr>
      <th>Tên Danh Mục</th>
      <th>
          <input type="text" value="<?php echo $dong['TenDanhMuc']?>" name="tendanhmuc" class="styled-input">
      </th>
    </tr>
    <tr>
      <th>Thứ Tự</th>
      <th>
          <input type="text" value="<?php echo $dong['ThuTu']?>" name="thutu" class="styled-input">
      </th>
    </tr> 
    <tr> 
      <th colspan="2"><input type="submit" name="suadanhmuc" value="Sửa Danh Mục" class="styled-button"></th>
    </tr>
</table>
<?php
    }
    ?>
</form>
</div>