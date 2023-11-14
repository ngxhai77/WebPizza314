<?php
include('../../config/config.php');

$tensanpham= $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$mota = $_POST['mota'];
$noidung = $_POST['noidung'];
$tinhtrang= $_POST['tinhtrang'];
// $danhmuc= $_POST['danhmuc'];
//xulihinhanh

if(isset($_POST['themsanpham'])){
    //them
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,mota,noidung,tinhtrang,id_danhmuc) VALUE ('".$tensanpham."
    ','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$mota."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');
    //sua
}elseif (isset($_POST['suasanpham'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

        $sql = "SELECT * FROM  tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1 ";
        $query = mysqli_query($ysqli,$sql);

        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_update = "UPDATE tbl_sanpham 
        SET tensanpham='".$tensanpham."',
        masp='".$masp."',
        giasp='".$giasp."',
        soluong='".$soluong."',
        hinhanh='".$hinhanh."',
        mota='".$mota."',
        noidung='".$noidung."',
        tinhtrang='".$tinhtrang."'
        WHERE id_sanpham ='$_GET[idsanpham]'";
}else{
    $sql_update = " UPDATE tbl_sanpham 
    SET tensanpham='".$tensanpham."',
    masp='".$masp."',
    giasp='".$giasp."',
    soluong='".$soluong."',
    mota='".$mota."',
    noidung='".$noidung."',
    tinhtrang='".$tinhtrang."' 
    WHERE id_sanpham='$_GET[idsanpham]'";
}
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1 ";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE  id_sanpham ='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

?>
