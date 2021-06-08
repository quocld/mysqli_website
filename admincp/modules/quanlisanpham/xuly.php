<?php
    include('../../config/config.php');

    $tensanpham=$_POST['tensp'];
    $masp=$_POST['masp'];
    $giasp=$_POST['giasp'];
    $tomtat=$_POST['tomtat'];
    $soluong=$_POST['soluong'];
    $noidung=$_POST['noidung'];
    $tinhtrang=$_POST['tinhtrang'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanh=time().'_'.$hinhanh;
    $danhmuc=$_POST['danhmuc'];
if(isset($_POST['themsanpham'])){
    //them
    $sql_them="INSERT INTO tbl_sanpham(tensp,masp,giasp,hinhanh,tomtat,soluong,noidung,tinhtrang,id_category) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$hinhanh."','".$tomtat."','".$soluong."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'tailen/'.$hinhanh);
    header("location: ../../index.php?action=managerproductcategory&query=insert");
   
}elseif(isset($_POST['editproduct'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'tailen/'.$hinhanh);
        $sql="SELECT*FROM tbl_sanpham WHERE id_sanpham ='$_GET[idproduct]' LIMIT 1";
        $query=mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
        unlink('tailen/'.$row['hinhanh']);
    }
        $sql_edit="UPDATE tbl_sanpham SET tensp='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',soluong='".$soluong."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_category='".$danhmuc."' WHERE id_sanpham='$_GET[idproduct]'";
    }else{
        $sql_edit="UPDATE tbl_sanpham SET tensp='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',tomtat='".$tomtat."',soluong='".$soluong."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_category='".$danhmuc."' WHERE id_sanpham='$_GET[idproduct]'";
    }
    mysqli_query($mysqli,$sql_edit);
    header('Location:../../index.php?action=managerproductcategory&query=insert');
}else{
    $id=$_GET['idproduct'];
    $sql="SELECT*FROM tbl_sanpham WHERE id_sanpham ='$id' LIMIT 1";
    $query=mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('tailen/'.$row['hinhanh']);
    }
    $sql_delete="DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=managerproductcategory&query=insert');
}

?>