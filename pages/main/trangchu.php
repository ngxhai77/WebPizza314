


<h3 class="sub-heading">Thực đơn </h3>
   </BR>
   <h2 class="food-type">PIZZA</h2>
   <?php
     $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_danhmuc.tendanhmuc = 'pizza'
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 3 ";
     $query_pro = mysqli_query($mysqli,$sql_pro);
     ?>
   <ul class = "list-products">
                
                <?php
                while($row = mysqli_fetch_array($query_pro))
                {   
                ?>
                  <li class="item">
                 
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                    <p class="name"><?php echo $row['tensanpham']?></p>
                    <p class="mota">mo ta san pham</p>
                    <p class="price"><?php echo number_format($row['giasp']).'vnd'?></p>
                    <a href="#" class="btn">Thêm vào giỏ hàng</a>
                </a>
                </li>
                <?php
                     }
                ?>
                </ul>
  

                <button class="btnMore"><a href="index.php?quanly=danhmucsanpham&id=6">XEM THÊM +</a></button>

<h2 class="food-type">Khai Vị</h2>

<?php
     $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_danhmuc.tendanhmuc = 'khai vị'
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 3 ";
     $query_pro = mysqli_query($mysqli,$sql_pro);
?>
  <ul class = "list-products">
                
                <?php
                while($row = mysqli_fetch_array($query_pro))
                {   
                ?>
                <li class="item">
                   
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                        <p class="name"><?php echo $row['tensanpham']?></p>
                        <p class="mota">mo ta san pham</p>
                        <p class="price"><?php echo number_format($row['giasp']).'vnd'?></p>
              
                    </a>
                </li>
                <?php
                     }
                ?>
                </ul>

                <button class="btnMore"><a href="index.php?quanly=danhmucsanpham&id=8">XEM THÊM +</a></button>


<h2 class="food-type">Mỳ ý</h2>

<?php
     $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_danhmuc.tendanhmuc = 'mỳ ý'
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 3 ";
     $query_pro = mysqli_query($mysqli,$sql_pro);
?>
  <ul class = "list-products">
                
                <?php
                while($row = mysqli_fetch_array($query_pro))
                {   
                ?>
                <li class="item">
                   
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                        <p class="name"><?php echo $row['tensanpham']?></p>
                        <p class="mota"><?php echo $row['mota']?></p>
                        <p class="price"><?php echo number_format($row['giasp']).'vnd'?></p>
                    </a>
                </li>
                <?php
                     }
                ?>
                </ul>

<button class="btnMore"><a href="index.php?quanly=danhmucsanpham&id=9">XEM THÊM +</a></button>


</div> 

