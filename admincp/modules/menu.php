<?php
    if(isset($_GET['action']) && $_GET['action']=="logout"){
    unset($_SESSION['dangnhap']);
    header("location:login.php/");
    }
    ?>
<ul class=menuadmin>
    <li><a style="text-decoration: none" href="index.php?action=managerproduct&query=insert">Manager product category</a></li>
    <li><a style="text-decoration: none" href="index.php?action=managerproductcategory&query=insert">Manager Product</a></li>
    <li><a style="text-decoration: none" href="index.php?action=managerpost">Manager post</a></li>
    <li><a style="text-decoration: none" href="index.php?action=managerpostcategory">Manager post category</a></li>
    <li><a style="text-decoration: none" href="../index.php">Home Page</a></li>
    <li><a style="text-decoration: none" href="index.php?action=logout">logout:  


    <?php 
    session_start();
    if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    }
    ?>
    </a></li>
    

</ul>
<div class="clear"></div>
