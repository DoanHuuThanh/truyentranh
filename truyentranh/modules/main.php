<div class="main">
<?php
  if(isset($_GET['action']) && isset($_GET['query'])) {
    $tam = $_GET['action'];
    $query = $_GET['query'];
  }
   else {
    $tam='';
    $query ='';
   }

   if($tam == 'quanlydanhmucsanpham' &&  $query=='them') {
    include("./quanlydanhmuccp/them.php");
    include("./quanlydanhmuccp/lietke.php");
   }
   elseif($tam == 'quanlydanhmucsanpham' &&  $query=='sua') {
    include("./quanlydanhmuccp/sua.php");
   }
   elseif($tam == 'sanpham' &&  $query=='them') {
    include("./quanlysanphamcp/them.php");
    include("./quanlysanphamcp/lietke.php");
   }
   elseif($tam == 'sanpham' &&  $query=='sua') {
    include("./quanlysanphamcp/sua.php");
   }
   elseif($tam == 'taikhoanadmin' &&  $query=='them') {
    include("./quanlytaikhoanadmincp/them.php");
    include("./quanlytaikhoanadmincp/lietke.php");
   }
   elseif($tam == 'sanpham' &&  $query=='sua') {
    include("./quanlytaikhoanadmincp/sua.php");
   }
   elseif($tam == 'taikhoankhachhang' &&  $query=='lietke') {
    include("./quanlytaikhoankhachhangcp/lietke.php");
   }
   elseif($tam == 'sanpham' &&  $query=='sua') {
    include("./quanlytaikhoankhachhangcp/sua.php");
   }
   
   else {
    include("./dashboard.php");
   }

?>

</div>