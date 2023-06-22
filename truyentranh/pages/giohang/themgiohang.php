<?php
  session_start();
  include("../../modules/web_mysql/config.php");
  //thêm số lượng
  if(isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item) {
      if($cart_item['id']!=$id) {
        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
        'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
        $_SESSION['cart'] = $product;
      }
      else {
        $tangsoluong = $cart_item['soluong'] +1;
        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,
        'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
        $_SESSION['cart'] = $product;
      }
    }  
    header("Location:../index.php?danhmuc=giohang");
  }
  //trừ số lượng
  if(isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item) {
      if($cart_item['id']!=$id) {
        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
        'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
        $_SESSION['cart'] = $product;
      }
      else {
        $tangsoluong = $cart_item['soluong'] -1;
        if($cart_item['soluong']>1) {
        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,
        'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
        }
        else {
        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
        'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
      } 
      $_SESSION['cart'] = $product;
    }  
  }
  header("Location:../index.php?danhmuc=giohang");
}
  //xoa 
  if(isset($_GET['xoa']) && $_SESSION['cart'] ) {
    $id = $_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item) {
        if($cart_item['id']!=$id) {
          $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
             'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
        }
           $_SESSION['cart'] = $product;
    } 
    header("Location:../index.php?danhmuc=giohang");
   }
  //xóa tất cả 
   if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1 ) {
    unset($_SESSION['cart']);
    header("Location:../index.php?danhmuc=giohang");
   }
  //thêm sản phẩm vào giỏ hàng

  if(isset($_POST['themgiohang'])) {
     //session_destroy();
     $id = $_GET['idsanpham'];
     $soluong=1;
     $sql = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.MaTruyen = '".$id."' LIMIT 1";
     $query = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($query);
     if($row) {
       $new_product = array(array('tensanpham'=>$row['TenTruyen'],'id'=>$id,'soluong'=>$soluong,
       'giatruyen'=>$row['DonGia'],'hinhanh'=>$row['HinhAnh']));
      // là cách khởi tạo một mảng đa chiều (mảng lồng nhau). Trong trường hợp này, mảng $new_product chứa một phần tử duy nhất,
      // và phần tử đó là một mảng khác. Mảng lồng nhau này chứa các khóa và giá trị tương ứng
       if(isset($_SESSION['cart'])) {
         $found = false;
         foreach($_SESSION['cart'] as $cart_item) {
           if($cart_item['id'] == $id) {
             $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
             'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
             //$product[] = array() là cách thêm một phần tử vào mảng $product. Mỗi lần gọi,
             // một phần tử mới sẽ được thêm vào cuối mảng $product. Kết quả là mảng $product sẽ chứa nhiều phần tử.
             $found = true;
           } else {
             $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
             'giatruyen'=>$cart_item['giatruyen'],'hinhanh'=>$cart_item['hinhanh']);
           }
         }
         if($found == false) {
                $_SESSION['cart']= array_merge($product,$new_product); 
           //sản phẩm mới chưa tồn tại trong giỏ hàng, chúng ta kết hợp (array_merge) mảng $product và mảng $new_product, và gán kết quả cho $_SESSION['cart']. 
           //Điều này đảm bảo rằng sản phẩm mới được thêm vào giỏ hàng mà không làm mất đi các sản phẩm đã có      
         }
         else {
           $_SESSION['cart']=$product;
          
         }
       }else {
         $_SESSION['cart']=$new_product;
       }
     }
     header("Location:../index.php?danhmuc=giohang");
  }

?>