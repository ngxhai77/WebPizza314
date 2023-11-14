<?php 
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau = '".$matkhau."'  LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        
        if ($count>0){
            $row_data= mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'] ;
            header("Location:index.php?quanly=giohang");
        }else{
           echo '<p style = "color:red ;  font-size : 60px" >Mật khẩu hoặc email sai , vui lòng nhập lại ! </p>';
           
        }

    }
?> 



<div class="login-form">
  <form action="" method="POST">
    <h1>Đăng nhập</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Email" name="email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Mật khẩu" name="password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Quên mật khẩu ?</a>
    </div>
    <div class="action">
      <button name="dangky">Đăng Ký</button>
      <button name="dangnhap">Đăng Nhập</button>
    </div>
  </form>
</div>