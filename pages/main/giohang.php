
<p style="font-size : 50px ; color : white " >GIỎ HÀNG : 
<?php
    if(isset($_SESSION['dangky'])){
        echo $_SESSION ['dangky'];
    }
?>
</p>
<p style="font-size :80px;  color:white;">SẢN PHẨM </p>

<div class="cart_wrapper">
<?php
    if(isset($_SESSION['cart'])){
        $i=0;
        $tongtien = 0;
       foreach($_SESSION['cart'] as $cart_item ){
        $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
        $tongtien+=$thanhtien;
        $i++;
 ?>
        <div class="item_wrapper" >
                <div class="pro_image">
                <a href=""><?php echo $i;?></a>
                <a href=""><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>"></a>
                </div>
                <div class="pro_name" >
                    <p><a style="color:black; font-size:30px"  href=""><?php echo $cart_item['tensanpham']?></a></p>
                </div>
                <div class="pro_quanly">
                    <a style="color:black; font-size:30px" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">XÓA</a>
                </div>
                <div class ="pro_soluong">
                   <p> <a style="color:black; font-size:30px" href=""><?php echo $cart_item['soluong']?></a></p>
                </div>
                <div  class="pro_price" >
                   <p><a style="color:black; font-size:30px" href=""><?php echo number_format( $cart_item['giasp'],0,',','.').'vnđ'?></a></p>
                </div>
                <!-- <div class="pro_quanly">
                    <a style="color:black; font-size:30px" href="">XÓA</a>
                </div>-->
        </div> 
           
            

        <div class="clear"> </div>
       
    <?php
        }
    
    ?>
     <div class="tongtien"> 
        <p> <a style="color: #000 "> Tổng tiền : <?php echo  number_format( $tongtien,0,',','.').'vnđ'?></a></p>
        <p style="float: right ; " class="delall"><a style="color: #000 ;" href="pages/main/themgiohang.php?xoatatca=1"> Xoá Tất cả </a></p>
        <!-- <div style="clear: both;"></div> -->

        <?php
            if(isset($_SESSION['dangky'])){
            ?>
                <p><a style="color:green ; "href="index.php?quanly=thanhtoan">THANH TOÁN</a></p>
            <?php
            }else{
             ?>
            <p><a  style="color:green ;  "href="index.php?quanly=dangky">ĐĂNG NHẬP THANH TOÁN</a></p>
            <?php       
            }
            
            ?>

        
        
        </div>
    </div>

    <?php
    }else{
       
     ?>
        <div class="emtycart">
           <p>HIỆN TẠI GIỎ HÀNG ĐANG TRỐNG</p>
        </div>

     <?php   
    }
    ?>

</div>
</div>