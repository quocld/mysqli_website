<?php
    $sql_editproduct="SELECT*FROM tbl_sanpham WHERE id_sanpham='$_GET[idproduct]' LIMIT 1 ";
    $query_editproduct= pg_query($db,$sql_editproduct);
?>

<h1>EDIT PRODUCT</h1>
<table border="1" width="80%" style="border-collapse: collapse">
    <form method="POST" action="modules/quanlisanpham/xuly.php?idproduct=<?php echo $_GET['idproduct'] ?>" enctype="multipart/form-data">
        
        <?php
            while($dong= pg_fetch_array($query_editproduct)){
        ?>
        <tr>
            <td>Product name</td>
            <td><input value="<?php echo $dong['tensp']?>" type="text" name="tensp" ></td>
        </tr>
        <tr>
            <td>Product code</td>
            <td><input value="<?php echo $dong['masp']?>" type="text" name="masp" ></td>
        </tr>
        <tr>
            <td>Product cost</td>
            <td><input value="<?php echo $dong['giasp']?>" type="text" name="giasp" ></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="hinhanh" >
            <img src="modules/quanlisanpham/tailen/<?php echo $dong['hinhanh'] ?>" width="150px">
            </td>
        </tr>
        <tr>
            <td>Product Infomation Note</td>
            <td><textarea rows="10" name="tomtat" style="resize=none"><?php echo $dong['tomtat']?></textarea></td>
        </tr>
        <tr>
            <td>Product amount</td>
            <td><input value="<?php echo $dong['soluong']?>" type="number" name="soluong" ></td>
        </tr>
        <tr>
            <td>Product Infomation</td>
            <td><textarea rows="10" name="noidung" style="resize=none"><?php echo $dong['noidung']?></textarea></td>
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
                <?php
                if($row['tinhtrang']==1){
                ?>
                <option value="1" selected>Kich hoat</option>
                <option value="0" >An</option>
                <?php
                }else{
                ?>
                <option value="1">Kich hoat</option>
                <option value="0" selected>An</option>
                <?php
                }
                ?>
                </select>

            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="editproduct" value="Save" ></td>
        </tr>
        
    </form>
    <?php 
            }
        ?>
    
</table>