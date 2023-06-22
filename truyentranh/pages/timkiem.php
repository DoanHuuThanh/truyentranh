
<?php
if(isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
else {
    $tukhoa ='';
}
   $sql= "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.TenTruyen LIKE '%".$tukhoa."%' " ;
   $query = mysqli_query($conn,$sql); 
	
?> 
<h3>Từ Khóa Cần Tìm Kiếm : <?php echo $tukhoa ?></h3>

<div class="olw">
    <?php 

    while($row = mysqli_fetch_array($query)) {
    
    ?>
    <div class="olw-item">
        <ul>
            <li><a href="index.php?danhmuc=sanpham&idsanpham=<?php echo $row['MaTruyen'] ?>"><?php echo $row['TenTruyen'] ?></a></li>
            <li><span class="price"><?php echo $row['DonGia'] ?></span></li>
            <li>
                <div class="img product-image">
                    <a href="index.php?danhmuc=sanpham&idsanpham=<?php echo $row['MaTruyen'] ?>" title="<?php echo $row['TenTruyen'] ?>">
                        <img class="product-image" src="../modules/quanlysanphamcp/uploads/<?php echo $row['HinhAnh'] ?>" alt="<?php echo $row['TenTruyen'] ?>">
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
    <?php
    }
    ?>
</div>


              
            