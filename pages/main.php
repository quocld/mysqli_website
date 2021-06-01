<div class="main">
            <?php
                if(isset($_GET['quanly']) && $_GET['quanly']!="giohang" ){
                    include("sidebar/sidebar.php");
                }
            ?>
            <div class="maincontent">
                <div class="content_main"> 
                 <?php
                 if(isset($_GET['quanly'])){
                     $tam=$_GET['quanly'];
                 } else{
                     $tam="";
                 }
                 
                 if($tam=='giohang'){
                     include("maincontent/giohang.php");
                 }
                 else{
                     include("maincontent/index.php");
                 }
                 if($tam=="camon"){
                     include("pages/giohang/camon.php");
                 }
                 ?>
                </div>
            </div>
                
        </div>
        <div class="clear"></div>