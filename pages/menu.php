<?php 
        
         $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
         $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
       
         
?>
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<div class="menu">
<?php
while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
    
?>
<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a> </li>
<?php
}?>
        <li><a href="index.php?quanly=khuyenmai">Khuyến Mãi</a> 
        <li><a href="index.php?quanly=danhmucsanpham&id=6">CAC LOAI PIZZA</a>
            <ul class="sub-menu">
                <li><a href="index.php?quanly=danhmucsanpham&id=6">Công thức đặc biệt</a></li>
                <li><a href="index.php?quanly=danhmucsanpham&id=6">Hải sản cao cấp </a></li>
                <li><a href="index.php?quanly=danhmucsanpham&id=6">Thập cẩm cao cấp</a></li>
                <li><a href="index.php?quanly=danhmucsanpham&id=6">Truyền Thống</a></li>

            </ul>
        </li>
        
          
    </div>
    <div class="other">
        <li><input placeholder="Tìm Kiếm" type="text"><i class="fas fa-search"></i></li>
        
        <?php
            if(isset($_SESSION['dangky'])){
            ?>
            <li><a href="index.php?dangxuat=1">Đăng Xuất</a> 
            <?php
            }else{
            ?>   
                <li><a href="index.php?quanly=dangky">Đăng Ký </a> 
            <?php   
            }
            ?>
        <li><a class="fa fa-user" href="index.php?quanly=dangky"></a></li>
        <li><a class="fa fa-shopping-bag" href="index.php?quanly=giohang"></a></li>


    </div>