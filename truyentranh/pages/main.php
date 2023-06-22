

<div class="main">
<?php
  if(isset($_GET['danhmuc']) ) {
    $tam = $_GET['danhmuc'];
  }
   else {
    $tam='';
   }
   if($tam == 'trangchu') {
    include("./header.php");
    include("./trangchu.php");
   }
   elseif($tam == 'danhmuc') {
    include("./danhmucsanpham/danhmuc.php");
   }
   elseif($tam == 'sanpham') {
    include("./danhmucsanpham/chitietsanpham.php");
   }
   elseif($tam == 'giohang') {
    include("./giohang/giohang.php");
   }
   elseif($tam == 'thanhtoan') {
    include("./giohang/thanhtoan.php");
   }
   elseif($tam == 'signin') {
   header("Location:./loginkhachhang.php");
   }
   elseif($tam == 'register') {
    header("Location:./register.php");
    }
    elseif($tam == 'timkiem') {
      include("./timkiem.php");
      }
   else {
    include("./header.php");
    include("./trangchu.php");
   }

?>

</div>

<div class="clear"></clear>