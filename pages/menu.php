<?php
session_start();
    if(isset($_GET['quanly']) && $_GET['quanly']=="logout"){
    unset($_SESSION['dangnhap']);
    header("location:index.php");
    }
    ?>
<?php
    $sql_danhmuc="SELECT*FROM tbl_category ORDER BY id_category DESC";
    $query_danhmuc=pg_query($db,$sql_danhmuc);
?>
<style>
      img.avtmenu {
    width: 50px;
    height: 50px;
    margin-top: -12px;
    margin-left: 2%;
    border-radius: 50%;
}
}
</style>
<div class="menu">
            <a href="index.php"><span class="logomenu"><i class="fab fa-bandcamp"></i><span id="spanlogo">Techshop</span></span></i>

</a>
            <div class="menubar">

                <ul id="menu">
                    <li><input type="search" placeholder="Search something..."></li>
                    <li><a href="index.php?quanly=sanphamnoibat">Category</a></li>
                    <ul id="sub">             
                    <?php
                    while($row_danhmuc= pg_fetch_array($query_danhmuc)){
                    ?>
                    <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_category']; ?>"><?php echo $row_danhmuc['danhmuc']; ?></a></li>
                    <?php
                    }
                    ?>
                    </ul>
                    <li><a href="index.php?quanly=laptop&id=1">laptop</a>
                    <ul id="sub">             
                    <li><a href="hp.php">HP</a></li>
                    <li><a href="asus.php">ASUS</a></li>
                    <li><a href="dell.php">DELL</a></li>
                    </ul>
                    </li>
                    <li><a href="pages/profile/profile.php">Profile</a></li>
                    <li><a href="index.php?quanly=giohang">Cart</a></li>
                    <?php
                        if(isset($_SESSION['dangnhap'])){
                        //da dang nhap 
                    ?>
                    <li class="loginbut"><a href="index.php?quanly=logout">Logout</a></li>
                    <li class="loginbut"><a href="pages/profile/profile.php">

                    <?php 
                    if(isset($_SESSION['dangnhap'])){
                        echo $_SESSION['dangnhap'];
                    }
                    ?>
                    </a></li>
                    <?php
                    $sql_menuavt="SELECT*FROM tbl_profile WHERE username='".$_SESSION['dangnhap']."' LIMIT 1  ";
                    $query_menuavt=pg_query($db,$sql_menuavt);
                    $avtmenu=pg_fetch_array($query_menuavt);
                    if(isset($avtmenu['anhdaidien'])){
                    ?>
                    <img class="avtmenu" src="pages/profile/avatar/<?php echo $avtmenu['anhdaidien'] ?>" >
                    <?php
                    }else{
                    ?>
                    <img class="avtmenu" src="pages/profile/avatar/avatar.jpeg" >

                    <?php
                    }
                    ?>

                    <?php  }else{ ?>
                    <li class="loginbut"><a href="admincp/login.php/">Login</a></li>
                    <li class="loginbut"><a href="admincp/signup.php/">Sign Up</a></li>
                    <?php } 
                    ?>
                    
                </ul>
            </div>
        </div>
