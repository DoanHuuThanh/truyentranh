<?php
include('../web_mysql/config.php');
 $taikhoan = $_POST['username'];
 $matkhau = $_POST['password'];
 $status = $_POST['status'];

 if(isset($_POST['themtaikhoanadmin'])) {
    $sql_them = "INSERT INTO tbl_admin(AdminUsername,AdminPassword,AdminStatus) VALUE('".$taikhoan."','".$matkhau."','".$status."')";
    mysqli_query($conn, $sql_them);
    header('Location:../index.php?action=taikhoan&query=them');
 }
?>