 <?php
   $sql_danhmuc = "SELECT * FROM tbl_danhmuc";
   $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
?> 

<div class ="menu">
            <ul class="list_menu">
              <li><a href="index.php?danhmuc=trangchu">TRANG CHỦ</a></li>
              <li>
                  <a href="#">DANH MỤC</a>
                  <div class="danhmuc">
                  <ul class="list_danhmuc">
                    <?php while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                    <li><a href="index.php?danhmuc=danhmuc&iddanhmuc=<?php echo $row_danhmuc['MaDanhMuc'] ?>"><?php echo $row_danhmuc['TenDanhMuc'] ?></a></li>
                   <?php } ?>
                      </ul>   
                </div>
              </li>
              <li><a href="#">THỂ LOẠI</a></li>
              <li><a href="#">TÁC GIẢ</a></li>
              <li><a href="#">THÀNH VIÊN</a></li>
              <li><a href="#">TIN TỨC</a></li>
              
            </ul>
            
</div>