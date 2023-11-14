<?php 
        $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
        AND tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
        $query_pro = mysqli_query($mysqli,$sql_pro);
        $row_title  = mysqli_fetch_array($query_pro)
    ?>
    
<h3 style="font-size:80px; color:orangered;"> <?php echo $row_title['tendanhmuc']?> </h3> 
            


        <ul class = "list-products">
                
            <?php
            while($row_pro = mysqli_fetch_array($query_pro))
            {   
            ?>
              <li class="item">
                
                <!----<- ?= $row_pro['hinhanh']?> -->
             
             
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                <p class="name"><?php echo $row_pro['tensanpham']?></p>
                <p class="mota"><?php echo $row_pro['mota']?></p>
                <p class="price"><?php echo number_format($row_pro['giasp']).'vnd'?></p>
    
            </li>
            <?php
                 }
            ?>
           