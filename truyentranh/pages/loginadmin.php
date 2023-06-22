<?php
   session_start();
   include("../modules/web_mysql/config.php");
   if (isset($_POST['dangnhapadmin'])) {
       $taikhoan = $_POST['username'];
       $matkhau = $_POST['password'];
       $sql_admin = "SELECT * FROM tbl_admin WHERE AdminUsername = '".$taikhoan."' AND AdminPassword='".$matkhau."' ";
       $query_admin = mysqli_query($conn, $sql_admin);
       $row_admin = mysqli_num_rows($query_admin); // Số bản ghi trả về của truy vấn admin
   
       if ($row_admin > 0) {
           $_SESSION['dangnhapadmin'] = $taikhoan;
           header("Location:../modules/index.php");
       } else {
           echo '<script> alert("Tài Khoản Hoặc Mật Khẩu Không Đúng, Vui Lòng Nhập Lại") </script>';
           header("Location:./login.php");
       }
       
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    width: 400px;
    height: 450px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
 
}

.form-group {
    margin-bottom: 15px;
    height: 120%;
}

.form-group a {
    padding: 20px;
    margin-top: 10px;
    float: right;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 90%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 100px;
}

button:hover {
    background-color: #45a049;
}

.register-link {
    text-align: center;
    margin-top: 15px;
}

.register-link a {
    color: #4CAF50;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

/* Tùy chỉnh nền */
body {
    background-image: linear-gradient(to right, #2196F3, #009688);
}

.dangki {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
    </style>
</head>
<body>
<div class="container">
        <h2>Đăng nhập</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
             <a href="">Quên mật khẩu </a>
            </div>
            <button name="dangnhapadmin" type="submit">Đăng nhập</button>
        </form>
        <div class="dangki">
             <a href="./register.php">Register</a>
            </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>