<?php
header("location: index.php?quanly=sanphamnoibat");
if(isset($_GET['quanly']) && $_GET['quanly']=="sanphamnoibat"){
?>
<?php
    $sql_productall="SELECT*FROM tbl_sanpham LIMIT 20";
    $query_productall=pg_query($db,$sql_productall);
    
?>
<p>Product category: </p>
                <ul class=product_list>
                    <?php
                    while($row_productall=pg_fetch_array($query_productall)){
                    ?>
                    <li>
                        <img src="admincp/modules/quanlisanpham/tailen/<?php echo $row_productall['hinhanh'] ?>">
                        <a href="#">   
                            <p class="product_name"><?php echo $row_productall['tensp'] ?></p>
                            <p class="product_cost">Cost: <?php echo $row_productall['giasp'].'$'?></p>
                            <form action="pages/giohang/themgiohang.php?idproduct=<?php echo $row_productall['id_sanpham'] ?>" method="POST">
                                 <input type="submit" name="themgiohang" value="Add to Cart">   
                            </form>
                            <form action="pages/sanpham/sanpham.php?idproduct=<?php echo $row_productall['id_sanpham'] ?>" method="POST">
                                <input type="submit" name="viewmorebut" value="View More">
                            </form>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                
                </ul>



<?php }else{ ?>


<?php
    $sql_product="SELECT*FROM tbl_sanpham WHERE tbl_sanpham.id_category='$_GET[id]' ORDER BY tbl_sanpham.id_category DESC";
    $query_product=pg_query($db,$sql_product);
    
?>
<p>Product category: </p>
                <ul class=product_list>
                    <?php
                    while($row_product=pg_fetch_array($query_product)){
                    ?>
                    <li>
                        <img src="admincp/modules/quanlisanpham/tailen/<?php echo $row_product['hinhanh'] ?>">
                        <a href="#">   
                            <p class="product_name"><?php echo $row_product['tensp'] ?></p>
                            <p class="product_cost">Cost: <?php echo $row_product['giasp'].'$'?></p>
                            <form action="pages/giohang/themgiohang.php?idproduct=<?php echo $row_product['id_sanpham'] ?>" method="POST">
                                 <input type="submit" name="themgiohang" value="Add to Cart">   
                            </form>
                            <form action="pages/sanpham/sanpham.php?idproduct=<?php echo $row_product['id_sanpham'] ?>" method="POST">
                                <input type="submit" name="viewmorebut" value="View More">
                            </form>
                            
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                
                </ul>
<?php
}
?>
