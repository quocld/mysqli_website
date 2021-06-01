<?php
 session_start();
 include("../../admincp/config/config.php");
 if(isset($_SESSION['dangnhap'])){
     $sql="SELECT*FROM tbl_user WHERE username='".$_SESSION['dangnhap']."' LIMIT 1 ";
     $sql_user=mysqli_query($mysqli,$sql);
     $row_user=mysqli_fetch_array($sql_user);
     $sql_info="SELECT*FROM tbl_profile WHERE username='".$_SESSION['dangnhap']."' LIMIT 1 ";
     $sql_user_info=mysqli_query($mysqli,$sql_info);
     $row_user_info=mysqli_fetch_array($sql_user_info); 
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User  </title>
    <style>
    td {
    width: 250px;
    padding: 10px;
    font-size: larger;
    font-family: arial;

}
table.Profiletable {
    margin: auto;
    background-color: white;
}
img {
    width: 50%;
}
a {
    text-decoration: none;
    font-family: Arial;
    margin-left: 20px;
    background-color: aqua;
}
.c {
    margin-left: 36%;
}
h1{
    font-family: Arial;
}
h1 {
    color: white;
}
body{
    background: url('../../images/backweb.png');
}

</style>
</head>
<body>
<h1>Profile of User:</h1>
<table style="width:60%; text-align: center; border-collapse: collapse;" class="Profiletable" border="1">
    
    <tr>
    <td colspan="2"><img src="avatar/<?php echo $row_user_info['anhdaidien'] ?>" ></td>
    </tr>
    <tr>
    <td>User name</td>
    <td><?php echo $row_user['username'] ?></td>
    </tr>
    <tr>
    <td>Full name</td>
    <td><?php echo $row_user_info['hovaten'] ?></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><?php echo $row_user['phone'] ?></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><?php echo $row_user['email'] ?></td>
    </tr>
</table>
   <div class="c">
   <a href="profile.php?action=update"> Update </a>
   <a href="profile.php?action=insert"> Upload avt and full name </a>
    <a href="../../index.php"> Homepage</a>
   
   </div>
   
   <?php
   if(isset($_GET['action']) && $_GET['action']=="update"){
       include("sua.php");
   }elseif(isset($_GET['action']) && $_GET['action']=="insert"){
    include("info.php");
   }
   ?>
   <?php
   
   $fullnamenew=$_POST['fullnamenew'];
   $username=$_POST['username'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $fullname=$_POST['fullname'];
    $avt=$_FILES['avatar']['name'];
    $avt_tmp=$_FILES['avatar']['tmp_name'];
    $avt=time().'_'.$avt;
    $avtnew=$_FILES['avatarnew']['name'];
    $avtnew_tmp=$_FILES['avatarnew']['tmp_name'];
    $avtnew=time().'_'.$avtnew;

   if(isset($_POST['updatebut'])){
    
        move_uploaded_file($avt_tmp,'avatar/'.$avt);
        $sql_update="SELECT*FROM tbl_user WHERE username='".$_SESSION['dangnhap']."' LIMIT 1";
        $query_update=mysqli_query($mysqli,$sql_update); 
        $row_update = mysqli_fetch_array($query_update);
        $sql_update_info="SELECT*FROM tbl_profile WHERE username='".$_SESSION['dangnhap']."' LIMIT 1";
        $query_update_info=mysqli_query($mysqli,$sql_update_info); 
        $row_update_info = mysqli_fetch_array($query_update_info);
        
        unlink('avatar/'.$row_update_info['anhdaidien']);
        $sql_edit="UPDATE tbl_user SET username='".$username."', phone='".$phone."', email='".$email."'  WHERE id_user='".$row_update['id_user']."'";
        $sql_edit2="UPDATE tbl_profile SET username='".$username."',anhdaidien='".$avt."', hovaten='".$fullname."'  WHERE id_profile='".$row_update_info['id_profile']."'";
        session_start();
        
        mysqli_query($mysqli,$sql_edit);
        mysqli_query($mysqli,$sql_edit2);
        $_SESSION['dangnhap']=$username;
        header('Location:profile.php');
   }elseif(isset($_POST['insertbut'])){
        move_uploaded_file($avtnew_tmp,'avatar/'.$avtnew);
        $sql_insert="INSERT INTO tbl_profile(anhdaidien,username,hovaten) VALUE ('".$avtnew."','".$_SESSION['dangnhap']."','".$fullnamenew."')";
        mysqli_query($mysqli,$sql_insert);
        header('Location:profile.php');

   }
   ?>
</body>
</html>
