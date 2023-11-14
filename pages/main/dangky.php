<?php
    
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
         VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ");
         if($sql_dangky){
            echo '<p style="color:white;  font-size: 60px;"> ĐĂNG KÝ THÀNH CÔNG </p>';
            $_SESSION['dangky'] =  $tenkhachhang ;
            header('Location:index.php?quanly=giohang');

         }
    }
?>


<p>ĐĂNG KÍ THÀNH VIÊN </p>

<div class="login-form">
  <form action=""  method="POST">
    <h1>ĐĂNG KÍ</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Họ và tên" name="hovaten" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Email" name="email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Điện thoại" name="dienthoai" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Địa chỉ" name="diachi" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Mật khẩu" name="matkhau" autocomplete="new-password">
      </div>
      
      <a href="index.php?quanly=dangnhap" class ="link">Đã là thành viên?</a>
    </div>
    <div class="action">
      <button name="dangky">Đăng Ký</button>
      
    </div>
  </form>
</div>