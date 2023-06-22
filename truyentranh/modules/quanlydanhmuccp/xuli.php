<?php
include('../web_mysql/config.php');
$tenloaisanpham = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];   
if(isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT INTO tbl_danhmuc(TenDanhMuc,ThuTu) VALUE('".$tenloaisanpham."','".$thutu."')";
    mysqli_query($conn, $sql_them);
    header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
}
elseif(isset($_POST['suadanhmuc'])) {
    $sql_sua = "UPDATE tbl_danhmuc SET TenDanhMuc='".$tenloaisanpham."', ThuTu='".$thutu."' WHERE MaDanhMuc = $_GET[madanhmuc] ";
    mysqli_query($conn, $sql_sua);
    header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
}
else {
    $id =$_GET['madanhmuc'];
    $sql_xoa =  "DELETE FROM tbl_danhmuc where MaDanhMuc='".$id."' ";
    mysqli_query($conn, $sql_xoa);
    header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
}

?>