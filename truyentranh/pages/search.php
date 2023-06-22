<?php
  if(isset($_GET['signin'] )&& $_GET['signin'] == 1) {
    unset($_SESSION['dangnhapkhachhang']);

  }
?>


<div class ="search">  
              <img src="./shop.jpg">

              <form action="index.php?danhmuc=timkiem" method="POST">

              <input type="text" class="timkiem" name="tukhoa" placeholder="Nhập từ khóa tìm kiếm">
              <button name="timkiem" type="submit" class="kinhlup"><i class="fa-solid fa-magnifying-glass"></i></button>
    
              </form>

                  <div class="cart"><a href="index.php?danhmuc=giohang"><i  class="fa-sharp fa-solid fa-cart-shopping"></i></a> </div>
                  <div class="user">   
                    <i class="fa-solid fa-circle-user"></i>
                    <div class="user_box">
							<ul>
								<li>
                                    <div class="login_dropdown">
                                   <?php
                                      if(isset($_SESSION['dangnhapkhachhang'])) {
                                        ?>
                                        <a href="index.php?signin=1" >Đăng Xuất</a>
                                        <p><?php echo $_SESSION['dangnhapkhachhang'] ?></p>
                                      <?php  
                                      }
                                      else {
                                      ?>
                                      <a href="index.php?danhmuc=signin" >Đăng Nhập</a>
                                      <?php
                                      }
                                   ?>
                    <!-- Nội dung của dropdown menu -->
                                     </div>
                            </li>
							</ul>
					</div>
                </div>
                
          </div>