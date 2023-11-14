<?php 
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."'  LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if ($count>0){
            $_SESSION['dangnhap'] = $taikhoan ;
            header("Location:index.php");
        }else{
           echo '<scrip> alert("Tài khoảng hoặc mật khẩu không đúng , vui lòng nhập lại");</scrip>';
           header("Location:login.php");
        }

    }
?> 

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LOGIN ADMINCP</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../css/stylelogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="" autocomplete="off" method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="User name" name="username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button name="dangnhap">Đăng Nhập</button>
    </div>
  </form>
</div>
<!-- partial -->
  <!-- <script  src="../js/script.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
</body>
</html>
