


<?php 
   $sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.MaDanhMuc=tbl_danhmuc.MaDanhMuc 
   AND tbl_sanpham.MaTruyen = '$_GET[idsanpham]' ";
   $query_chitiet = mysqli_query($conn,$sql_chitiet);
   $row_title = mysqli_fetch_array($query_chitiet)
   ?>
     <div class="col">
          <ol  class="col-item">
					<li><a href="/">TRANG CHỦ</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><a  style="font-weight:Bold" ><?php echo $row_title['TenTruyen'] ?></a></li>
						
				</ol>
         </div>
   <?php
   mysqli_data_seek($query_chitiet, 0);
  while($row_chitiet =mysqli_fetch_array($query_chitiet)) {
?>

<div class="hinhanh_sanpham">
<img width="30%"  src="../modules/quanlysanphamcp/uploads/<?php echo $row_chitiet['HinhAnh'] ?>" alt="<?php echo $row_chitiet['TenTruyen'] ?>">
</div>
<form method="POST" action="./giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['MaTruyen'] ?>" >

<div class="themgiohang">
    <input type="submit" name="themgiohang" value="THÊM VÀO GIỎ HÀNG">
</div>

</form>

<div class="chietiet_sanpham">
    <h2><?php echo $row_chitiet['TenTruyen'] ?></h2>
    <p> Tác Giả: <?php echo $row_chitiet['TacGia'] ?></p>
    <p><?php echo $row_chitiet['DonGia'] ?></p>
    <p>Số Trang: <?php echo $row_chitiet['SoTrang'] ?></p>
    <p> Danh Mục: <?php echo $row_chitiet['TenDanhMuc'] ?></p>
    <p> Mô Tả Nội Dung: <?php echo $row_chitiet['MoTa'] ?></p>
     <?php 
        if($row_chitiet['TinhTrang']==1) {
            ?>
       <p> Tình Trạng : Còn Hàng</p>
       <?php
        } else {
            ?>
             <p> Tình Trạng : Hết Hàng</p>
       <?php }
      ?>
</div>


<?php
  }
?>