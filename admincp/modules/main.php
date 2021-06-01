<div class="clear"></div>
<div class="main">
    <?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query= $_GET['query'];
            }else{
                $tam ='';
            }
            if($tam=='managerproduct' && $query=='insert'){
                include("modules/managerproduct/insertproduct.php");
                include("modules/managerproduct/listproduct.php");
            }elseif($tam=='managerproduct' && $query=='edit'){
                include("modules/managerproduct/editproduct.php");
            }elseif($tam=='managerproductcategory' && $query=='insert'){
                include("modules/quanlisanpham/insertproduct.php");
                include("modules/quanlisanpham/listproduct.php");
            }elseif($tam=='managerproductcategory' && $query=='edit'){
                include("modules/quanlisanpham/editproduct.php");
            }elseif($tam=='managerpost'){
                include("");
            }elseif($tam=='managerpostcategory'){
                include("");
            }else{
                include("dashboard.php");
            }
    ?>
</div>