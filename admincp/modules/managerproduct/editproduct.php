<?php
    $sql_editproduct="SELECT*FROM tbl_category WHERE id_category='$_GET[idproduct]' LIMIT 1 ";
    $query_editproduct= pg_query($db,$sql_editproduct);
?>

<h1>EDIT PRODUCT</h1>
<table border="1" width="80%" style="border-collapse: collapse">
    <form method="POST" action="modules/managerproduct/handling.php?idproduct=<?php echo $_GET['idproduct'] ?>">
        
        <?php
            while($dong= pg_fetch_array($query_editproduct)){
        ?>
        <tr>
            <td>Category name</td>
            <td><input type="text" value="<?php echo $dong['danhmuc']?>" name="tendanhmuc" ></td>
        </tr>
        <tr>
            <td>Category Code</td>
            <td><input type="text" value="<?php echo $dong['madanhmuc'] ?>" name="madanhmuc" ></td>
        </tr>
        <tr>
            
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Save" ></td>
        </tr>
        <?php 
            }
        ?>
    </form>
    
</table>