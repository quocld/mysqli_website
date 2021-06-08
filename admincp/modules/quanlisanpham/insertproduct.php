<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    input {
    width: 98%;
    margin-left: 0.3%;
}
</style>
<h1>INSERT PRODUCT</h1>
<table border="1" width="80%" style="border-collapse: collapse">
    <form method="POST" action="modules/quanlisanpham/xuly.php" enctype="multipart/form-data">
        
        <tr>
            <td>Product name</td>
            <td><input type="text" name="tensp" ></td>
        </tr>
        <tr>
            <td>Product code</td>
            <td><input type="text" name="masp" ></td>
        </tr>
        <tr>
            <td>Product cost</td>
            <td><input type="text" name="giasp" ></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="hinhanh" ></td>
        </tr>
        <tr>
            <td>Product Infomation Note</td>
            <td><textarea rows="10" name="tomtat" style="resize=none"></textarea></td>
        </tr>
        <tr>
            <td>Product amount</td>
            <td><input type="number" name="soluong" ></td>
        </tr>
        <tr>
            <td>Product Infomation</td>
            <td><textarea rows="10" name="noidung" style="resize=none"></textarea></td>
        </tr>
        <tr>
        <td>Category</td>
            <td>
                <select name ="danhmuc">
                    <?php
                    $sql_danhmuc="SELECT*FROM tbl_category ORDER BY id_category DESC";
                    $query_danhmuc=pg_query($db,$sql_danhmuc);
                    while($row_danhmuc=pg_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['danhmuc'] ?></option>
                    
                    <?php
                    }
                    ?>
                
                </select>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name ="tinhtrang">
                <option value="1">Kich hoat</option>
                <option value="0" >An</option>
                </select>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Insert product" ></td>
        </tr>
    </form>
    
</table>