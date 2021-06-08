<?php
    $sql_danhsach="SELECT*FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.id_category=tbl_category.id_category ORDER BY id_sanpham DESC ";
    $query_danhsach= pg_query($db,$sql_danhsach);
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

<h1> PRODUCT LIST </h1>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>Order</th>
        <th>Product name</th>
        <th>Product code</th>
        <th>Product cost</th>
        <th>Image</th>
        <th>Note</th>
        <th>Amount</th>
        <th>Category</th>
        <th>Information</th>
        <th>Status</th>
    </tr>
<?php
    $i=0;
    while($row = pg_fetch_array($query_danhsach)){
        $i++;
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['giasp'] ?></td>
        <td> <img src="modules/quanlisanpham/tailen/<?php echo $row['hinhanh'] ?>" width="150px"></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['danhmuc'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php 
        if($row['tinhtrang']==1){
            echo 'Kích hoạt';
        }else{
            echo 'Ẩn';
        }
        
        ?>
        </td>
        <td> 
            <a href="?action=managerproductcategory&query=edit&idproduct=<?php echo $row['id_sanpham'] ?> ">Edit</a> | <a href="modules/quanlisanpham/xuly.php?idproduct=<?php echo $row['id_sanpham']?>">Delete</a>
        </td>
    </tr>
        
<?php
    }
?>
</table>