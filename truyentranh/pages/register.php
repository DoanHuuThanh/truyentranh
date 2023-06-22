 <?php
     include("../modules/web_mysql/config.php");
     if(isset($_POST['dangky'])) {
        $tentaikhoan = $_POST['username'];
        $matkhau = $_POST['password'];
        $hoten = $_POST['hoten'];
        $namsinh = $_POST['namsinh'];
        $sodienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];

        $sql_dangky = "INSERT INTO tbl_taikhoankhachhang(TenTaiKhoan,MatKhau,HoTen,NamSinh,SDT,DiaChi) 
        VALUE('".$tentaikhoan."','".$matkhau."','".$hoten."','".$namsinh."','".$sodienthoai."','".$diachi."') ";
        $query_dangky = mysqli_query($conn,$sql_dangky);
        if($query_dangky) {
            echo '<p style="color:green;text-align:center" >Bạn Đã Đăng Ký Thành Công</p>';
        }
     }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
        background-image: linear-gradient(to right, #00c6ff, #0072ff);
        font-family: Arial, sans-serif;
    }

    .signup-form {
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .signup-form h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .signup-form .form-group {
        margin-bottom: 15px;
    }

    .signup-form .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .signup-form .form-group input[type="text"],
    .signup-form .form-group input[type="password"],
    .signup-form .form-group input[type="date"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
    }

    .signup-form button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .signup-form button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="signup-form">
<h2>Đăng Ký</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Tên Tài Khoản:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <label for="hoten">Họ Và Tên:</label>
                <input type="text" id="hoten" name="hoten" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <label for="namsinh">Năm Sinh:</label>
                <input type="date" id="namsinh" name="namsinh" >
            </div>
            <div class="form-group">
                <label for="dienthoai">Số Điện Thoại:</label>
                <input type="text" id="dienthoai" name="dienthoai" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label for="diachi">Địa Chỉ:</label>
                <input type="text" id="diachi" name="diachi" placeholder="Nhập địa chỉ">
            </div>
            
           
            <button name="dangky" type="submit">Đăng Ký </button>
        </form>
</div>
</body>
</html>