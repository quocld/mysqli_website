<?php
include("../../config/config.php");
$tendanhmuc=$_POST['tendanhmuc'];
$madanhmuc=$_POST['madanhmuc'];
if(isset($_POST['themdanhmuc'])){
    $sql_insert="INSERT INTO tbl_category(danhmuc, madanhmuc) VALUES('".$tendanhmuc."','".$madanhmuc."')";
    pg_query($db,$sql_insert);
    header('Location:../../index.php?action=managerproduct&query=insert');
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update="UPDATE tbl_category SET danhmuc='".$tendanhmuc."',madanhmuc='".$madanhmuc."' WHERE id_category='$_GET[idproduct]'";
    pg_query($db,$sql_update);
    header('Location:../../index.php?action=managerproduct&query=insert');
}else{
    $id=$_GET['idproduct'];
    $sql_delete="DELETE FROM tbl_category WHERE id_category='".$id."'";
    pg_query($db,$sql_delete);
    header('Location:../../index.php?action=managerproduct&query=insert');
}

?>