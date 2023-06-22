<?php
include('../web_mysql/config.php');
$tentruyen = $_POST['tentruyen'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$dongia = $_POST['dongia'];  
$soluong = $_POST['soluong'];
$sotrang = $_POST['sotrang'];
$mota = $_POST['mota'];
$danhmuc = $_POST['danhmuc'];
$tinhtrang = $_POST['tinhtrang'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;


if(isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_sanpham(TenTruyen,TacGia,NXB,DonGia,SoLuong,SoTrang,MoTa,HinhAnh,TinhTrang,MaDanhMuc) 
    VALUE('".$tentruyen."','".$tacgia."','".$nxb."','".$dongia."','".$soluong."','".$sotrang."','".$mota."','".$hinhanh."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($conn, $sql_them);
    move_uploaded_file($hinhanh_tmp,'./uploads/'.$hinhanh);
    header('Location:../index.php?action=sanpham&query=them');
}
elseif(isset($_POST['suasanpham'])) {
    if($hinhanh!='') {
        //thêm hình ảnh mơi
        move_uploaded_file($hinhanh_tmp,'./uploads/'.$hinhanh);
        //xóa hình ảnh cũ
        $sql = "SELECT * FROM tbl_sanpham where MaTruyen ='$_GET[matruyen]' LIMIT 1 ";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)) {
        unlink('./uploads/'.$row['HinhAnh']);
         }
        $sql_sua = "UPDATE tbl_sanpham SET TenTruyen='".$tentruyen."', TacGia='".$tacgia."', NXB='".$nxb."', DonGia='".$dongia."', SoLuong='".$soluong."', SoTrang='".$sotrang."',
         MoTa='".$mota."', HinhAnh='".$hinhanh."', TinhTrang='".$tinhtrang."', MaDanhMuc='".$danhmuc."' WHERE MaTruyen = '".$_GET['matruyen']."' ";
        }
    else {
        $sql_sua = "UPDATE tbl_sanpham SET TenTruyen='".$tentruyen."', TacGia='".$tacgia."', NXB='".$nxb."', DonGia='".$dongia."', SoLuong='".$soluong."', SoTrang='".$sotrang."',
         MoTa='".$mota."', TinhTrang='".$tinhtrang."',MaDanhMuc='".$danhmuc."' WHERE MaTruyen = '".$_GET['matruyen']."' ";
    }
    var_dump($hinhanh);
    mysqli_query($conn, $sql_sua);
    header('Location:../index.php?action=sanpham&query=them');
}
else {
    $id =$_GET['matruyen'];
    $sql = "SELECT * FROM tbl_sanpham where MaTruyen ='".$id."' LIMIT 1 ";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($query)) {
        unlink('./uploads/'.$row['HinhAnh']);
    }
    $sql_xoa =  "DELETE FROM tbl_sanpham where MaTruyen='".$id."' ";
    mysqli_query($conn, $sql_xoa);
    header('Location:../index.php?action=sanpham&query=them');
}

?>