<?php
   $sql_sanpham = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.MaDanhMuc='$_GET[iddanhmuc]'";
   $query_sanpham = mysqli_query($conn,$sql_sanpham);

   $sql_danhmuc = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.MaDanhMuc='$_GET[iddanhmuc]'";
   $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
   $row_title = mysqli_fetch_array($query_danhmuc);
	
?> 


          <div class="main">
			
         <div class="col">
          <ol  class="col-item">
					<li><a href="/">TRANG CHỦ</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><a href="/collections" >DANH MỤC</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li class="active"><span ><?php echo $row_title['TenDanhMuc'] ?></span></li>
					
				</ol>
         </div>
		 
            <div class="slidebar">
            <div class="title-block">	
				<h2 class="title-group">DANH MỤC SẢN PHẨM</h2>
			</div>

            <div class="filter-box">
				<ul >
					
					<li class="active submenu-parent" aria-expanded="false">
						<a href="/collections/truyen-tranh" title="Truyện Tranh">Truyện Tranh</a>
					</li>
					
                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Vật Phẩm - Quà Tặng">Vật Phẩm - Quà Tặng</a>
					</li>
					
					<li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Khác">Khác</a>
					</li>
							
				</ul>
			</div>

            <div class="title-block">	
				<h2 class="title-group">BỘ LỌC SẢN PHẨM</h2>
			</div>
             
            <div class="filter-box" id="filter-vendor">
				<div class="title-block-filter">
					
					<h2 class="title-group">Thể Loại </h2>
					
				</div>
				<ul>
					
                <li class="active submenu-parent" aria-expanded="false">
						<a href="/collections/truyen-tranh" title="Acttion">Action</a>
					</li>
					
                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Adult">Adult</a>
					</li>
					
					<li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Advance">Advance</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Anime">Anime</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Comedy">Comedy</a>
					</li>
                    
                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Khác">Comic</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Comic">Fantaci</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Romance">Romance</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Trinh Thám">Trinh Thám</a>
					</li>

                    <li class=" submenu-parent" aria-expanded="false">
						<a href="/" title="Ngôn Tình">Ngôn Tình</a>
					</li>
					
				</ul>
			</div>

            <div class="filter-box" id="filter-price">
				<div class="title-block-filter">
					
					<h2 class="title-group">Giá</h2>
					
				</div>
				<ul>
					<li>
						<label>
							<input type="radio" name="price-filter" data-price="0:50000" value="((price:product<50000))">
							<span>Nhỏ hơn 50,000₫</span>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="price-filter" data-price="50000:100000" value="((price:product>=50000)&amp;&amp;(price:product<100000))">
							<span>Từ 50,000₫ - 100,000₫</span>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="price-filter" data-price="100000:200000" value="((price:product>=100000)&amp;&amp;(price:product<200000))">
							<span>Từ 100,000₫ - 200,000₫</span>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="price-filter" data-price="200000:300000" value="((price:product>=200000)&amp;&amp;(price:product<300000))">
							<span>Từ 200,000₫ - 300,000₫</span>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="price-filter" data-price="300000:max" value="((price:product>=300000))">
							<span>Lớn hơn 300,000₫</span>
						</label>
					</li>
				</ul>
			</div>
            </div>
			
	  

         <div  class="maincontent">

           <?php while($row_pro = mysqli_fetch_array($query_sanpham)) {
		    ?>
		 <div class="product_information">
                <ul class="product_list">
					<li>
						<img title="<?php echo $row_pro['TenTruyen'] ?>" srcset="../modules/quanlysanphamcp/uploads/<?php echo $row_pro['HinhAnh'] ?>">
						<a href="index.php?danhmuc=sanpham&idsanpham=<?php echo $row_pro['MaTruyen'] ?>" title="<?php echo $row_pro['TenTruyen'] ?>"><?php echo $row_pro['TenTruyen'] ?></a>
						<span class="rice"><?php echo $row_pro['DonGia'] ?></span>
						<button type="button" class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
					</li>
				</ul>
				</div>

        <?php }?>

    </div>

  </div>
 
         