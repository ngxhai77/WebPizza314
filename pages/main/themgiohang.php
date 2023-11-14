<?php
    session_start();
    include('../../admincp/config/config.php');
    //them soluong
    //tru soluong
   
    //them sanpham vao gio hang 
    //xoa sanpham
    if(isset($_SESSION['cart'])&& $_GET['xoa']){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item ){
            if ($cart_item['id'] !=$id){
                $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$soluong+1,
                'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
        $_SESSION['cart'] = $product;
        header('Location:../../index.php?quanly=giohang');
        }
    }
    //xoa tat ca
    if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location:../../index.php?quanly=giohang');
    }


    if(isset($_POST['themgiohang'])){
        // session_destroy();
            $id = $_GET['idsanpham'];
            $soluong =1;
            $sql = "SELECT * FROM tbl_sanpham WHERE  id_sanpham='".$id."' LIMIT 1  ";
            $query = mysqli_query($mysqli,$sql);
            $row = mysqli_fetch_array($query);
            if($row){
                $new_product = array(array('tensanpham'=>$row['tensanpham'],'id'=>$id, 'soluong'=> $soluong,'giasp'=>$row['giasp'],
                'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
            //kiem tra giohang ton tai
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //neu du lieu bi trung 
                    if($cart_item['id']==$id)
                    {
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$soluong+1,
                        'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $found = true  ;
                    }
                    //neu du lieu ko bi trung
                    else {
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$soluong,
                        'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    }
                }
                if($found == false){
                    // lien ke 2 mang . neu sp ko trung thi lien ket 2 mang lai
                    $_SESSION['cart'] = array_merge($product,$new_product);
                }else {
                    $_SESSION['cart'] =$product ;
                }
            }else{
                $_SESSION['cart'] = $new_product;
            }
            }
         header('Location:../../index.php?quanly=giohang');
       
    }

?>