
<?php
   $sql_sanphammoi = "SELECT * FROM tbl_sanpham  ORDER BY tbl_sanpham.MaTruyen DESC LIMIT 5" ;
   $query_sanphammoi = mysqli_query($conn,$sql_sanphammoi); 
	
?> 
            <div class="tg">
              <div class="tg-parallax tg-bgbookwehave" >
                <div class="tg-status">
                  <div class="tg-statuscontent">
                    <span class="tg-statusicon"><i class="fa fa-book"></i></span>
                    <h2>Những Bản Manga mới nhất<span>3000+</span></h2>
                  </div>
                </div>
              </div>
          
              <div class="tg-parallax tg-bgtotalmembers" >
                <div class="tg-status">
                  <div class="tg-statuscontent">
                    <span class="tg-statusicon"><i class="fa fa-user"></i></span>
                    <h2>Khách hàng thân thiết<span>999+</span></h2>
                  </div>
                </div>
              </div>
    
              <div class="tg-parallax tg-bghappyusers" >
                <div class="tg-status">
                  <div class="tg-statuscontent">
                    <span class="tg-statusicon"><i class="fa fa-heart"></i></span>
                    <h2>Thế Giới của Light Novel<span>300+</span></h2>
                  </div>
                </div>
              </div>
            </div>

          
            <div class="featured-sldier-title group-title">
              <h2>Mới Nhất Trong Tuần</h2>
              <div class="quote_txt">Cùng tìm hiểu sách mới nhất của chúng tôi</div>
            </div>
            
            <div class="olw">
           
              <?php while($row_sanphammoi = mysqli_fetch_array($query_sanphammoi)) {?>
                <form method="POST" action="./giohang/themgiohang.php?idsanpham=<?php echo $row_sanphammoi['MaTruyen'] ?>" >
              <div class="olw-item">
                <ul>
                  <li><a href="index.php?danhmuc=sanpham&idsanpham=<?php echo $row_sanphammoi['MaTruyen'] ?>"><?php echo $row_sanphammoi['TenTruyen'] ?></a></li>
                  <li><span class="price"><?php echo $row_sanphammoi['DonGia'] ?></span></li>
                  <li>
                    <div class="img product-image">
                      <a href="index.php?danhmuc=sanpham&idsanpham=<?php echo $row_sanphammoi['MaTruyen'] ?>" title="<?php echo $row_sanphammoi['TenTruyen'] ?>">
                        <img class="product-image" src="../modules/quanlysanphamcp/uploads/<?php echo $row_sanphammoi['HinhAnh'] ?>" alt="<?php echo $row_sanphammoi['TenTruyen'] ?>">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" name="themgiohang" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
                </ul>
              </div>
                </form>
              <?php
              }
              ?>
            </div>
         
            

            <div class="featured-sldier-title group-title">
              <h2>Sản Phẩm Khuyến Mãi</h2>
              <div class="quote_txt">Nhanh tay chọn lựa những sản phẩm đang giảm giá</div>
            </div>

            <div class="olw">
              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              
          
            </div>
              
            <div class="featured-sldier-title group-title">
              <h2>Sắp phát hành</h2>
              <div class="quote_txt">Sách dự kiến được phát hành trong kì mới </div>
            </div>
            
            <div class="olw">
              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
            </ul>
              </div>

              <div class="olw-item">
                <ul>
                  <li><a href="#"> Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)</a></li>
                  <li><span class="price">450,000₫</span></li>
                  <li>
                    <div class="img product-image">
                      <a href="#" title="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                        <img src="truyen1.jpg" alt="Combo Cuộc Phiêu Lưu Của Croket  1-15 (Trọn Bộ)">
                      </a>
                    </div>
                  </li>
                  <li>
                      <div class="cart">
                        <button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                      </div>
                  </li>
              </ul>
    
            </div>

              
          
  </div>
