<?php
include("../../admincp/config/config.php");
$id_sanpham=$_GET['idproduct'];

$sql_sanpham="SELECT*FROM tbl_sanpham WHERE id_sanpham='".$id_sanpham."' LIMIT 1";
$query_sanpham=pg_query($db,$sql_sanpham);
$row_sanpham=pg_fetch_array($query_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User  </title>
    <style>
    td {
    width: 250px;
    padding: 10px;
    font-size: larger;
    font-family: arial;

}
table.Profiletable {
    margin: auto;
    background-color: white;
}
img {
    width: 80%;
    margin-left: 10%;
}
a {
    text-decoration: none;
    font-family: Arial;
    margin-left: 20px;
    background-color: aqua;
}
.c {
    margin-left: 36%;
}
h1{
    font-family: Arial;
}
h1 {
    color: white;
}
img {
    width: 72%;
    margin-left: 14%;
}
span.hinhanh {
    width: 49%;
    float:left;
}
.clear{
    clear:both;
}
p.tensp {
    font-family: Arial;
    font-weight: bold;
    font-size: 30px;
}
</style>
<div class="header">

</div>
<div class="sanpham">
    <span class="hinhanh">
        <img src="../../admincp/modules/quanlisanpham/tailen/<?php echo $row_sanpham['hinhanh'] ?>" alt="">
    </span>
    <span class="thongtin">
        <p class="tensp"><?php echo $row_sanpham['tensp'] ?></p>
     <table style="width:80%; text-align: center; border-collapse: collapse;" border="1px solid">
        <tr>
            <td> Gia san pham</td>
            <td> <?php echo $row_sanpham['giasp'].'$' ?> </td>
        </tr>
        <tr>
            <td>  Tom tat</td>
            <td> <?php echo $row_sanpham['tomtat'] ?></td>
        </tr>
        <tr>
            <td>  <a href="../../index.php" class="but">Homepage</a></td>
            <form action="../../pages/giohang/themgiohang.php?idproduct=<?php echo $row_sanpham['id_sanpham'] ?>" method="POST">
                                 <td><input type="submit" name="themgiohang" value="Add to Cart"> </td>  
            </form>
        </tr>
     </table>
    </span>

</div>
<div class="clear"></div>
<div class="noidung">
 <p class="noidung"><?php echo $row_sanpham['noidung'] ?></p>
</div>



