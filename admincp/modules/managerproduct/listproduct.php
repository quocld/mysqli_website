<?php
    $sql_listcategory="SELECT*FROM tbl_category ORDER BY id_category DESC ";
    $query_listproduct= mysqli_query($mysqli,$sql_listcategory);
?>
<style>
    td {
    width: 250px;
}
td {
    width: 150px;
    padding-left: 5px;
}
</style>

<h1> CATEGORY LIST </h1>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>Order</th>
        <th>Category name</th>
        <th>category code</th>
        <th>Control</th>
    </tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_listproduct)){
        $i++;
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['danhmuc'] ?></td>
        <td><?php echo $row['madanhmuc'] ?></td>
        <td> 
            <a href="?action=managerproduct&query=edit&idproduct=<?php echo $row['id_category'] ?> ">Edit</a> | <a href="modules/managerproduct/handling.php?idproduct=<?php echo $row['id_category']?>">Delete</a>
        </td>
    </tr>
        
<?php
    }
?>
</table>