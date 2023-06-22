

<div class="col">
          <ol  class="col-item">
					<li><a href="/">TRANG CHỦ</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><a style="font-weight:Bold" >GIỎ HÀNG </a></li>
					
				</ol>
         </div>


<h1 style="text-align:center">GIỎ HÀNG CỦA BẠN</h1>


<div class="container"> 
<table class="bordered-table" border="1"  >
    <tr>
      <th>Mã Sản Phẩm</th>
      <th>Tên Truyện</th>
      <th>Hình Ảnh</th>
      <th>Giá Tiền</th>
      <th>Số Lượng</th>
      <th>Thành Tiền</th>
    </tr>
    <?php
     if(isset($_SESSION['cart'])) {
        $i=0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item) {
            $i++;
            $price_str = str_replace([',', '₫'], '', $cart_item['giatruyen']);

            $quantity = intval($cart_item['soluong']);
            $price = floatval($price_str );
            
            $thanhtien = $quantity * $price;
            $tongtien +=$thanhtien;
            $formatted_thanhtien = number_format($thanhtien, 0, ',', '.') . '₫';
            $formatted_tongtien = number_format($tongtien, 0, ',', '.') . '₫';
            
        ?>
          <tr>
          
            <td><?php echo $i?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td> <img width="100px"  src="../modules/quanlysanphamcp/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="<?php echo $cart_item['tensanpham'] ?>"></td>
            <td><?php echo $cart_item['giatruyen'] ?></td>
            <td>
                <a class="tru" href="./giohang/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>
                <?php echo $cart_item['soluong'] ?>
                <a class="cong" href="./giohang/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
            </td>
            <td><?php echo  $formatted_thanhtien ?></td>
            <td><a href="./giohang/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
          </tr>
    <?php } ?>
                 <tr>
                 <td colspan="6"> 
                       <div class="tongtien">
                          Thành Tiền : <span><?php echo  $formatted_tongtien?></span>
                       </div>
                       <div class="xoatatca">
                         <a href="./giohang/themgiohang.php?xoatatca=1">Xóa Tất Cả</a>
                       </div>

                        <?php
                        if(isset($_SESSION['dangnhapkhachhang'])) {
                               ?>
                               <p class="dathang">
                                <a href="index.php?danhmuc=thanhtoan">Đặt Hàng </a>
                               </p>
                        <?php
                        } else {
                            ?>
                                <p class="dathang">
                                <a href="./loginkhachhang.php">Đăng nhập để đặt hàng </a>
                               </p>
                       <?php }
                        ?>
                         </td>
              </tr>

        <?php  } else {
            ?>
            <tr>
                <td colspan="6"><h1>HIỆN GIỎ HÀNG CÒN TRỐNG</h1></td>
            </tr> 
         <?php }
     
     ?>
     

</table>

    
</div>

