<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['loginbut'])){
        $user_name=$_POST['username'];
        $pass_word= md5($_POST['psw']);
        $pass_worduser=$_POST['psw'];
        $sql ="SELECT* FROM tbl_admin WHERE username='".$user_name."' AND password='".$pass_word."'  LIMIT 1";
        $row=mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        $admin_rows=mysqli_fetch_array($row);
        if($count>0){
            $_SESSION['dangnhap']=$user_name;
            $_SESSION['id_user']=$admin_rows['id_admin'];
            header("location:../index.php");
            
        }
        $sql_user ="SELECT* FROM tbl_user WHERE username='".$user_name."' AND password='".$pass_worduser."'  LIMIT 1";
        $rowuser=mysqli_query($mysqli,$sql_user);
        $countuser=mysqli_num_rows($rowuser);
        $user_rows=mysqli_fetch_array($rowuser);
        if($countuser>0){
          $_SESSION['dangnhap']=$user_name;
          $_SESSION['id_user']=$user_rows['id_user'];
          header("location:../../index.php");
    }
    if($countuser=0 or $count=0){
      header("location:login.php");
    }
    
    }
?>
<!DOCTYPE html>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #467daa;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


img {
  width: 40%;
  border-radius: 50%;

}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
  }
  html, body{
    height: 100vh;
    
    
    justify-content: center;
    align-items: center;
  
    width: 90%;
    height: 400px;
    max-width: 960px;
    margin: 0 auto;
    padding: 30px;
    background: #fff;
 
    justify-content: center;
    align-items: center;
  }

  body {
    background: url('Big-Sur-Mountains.png');
    background-size: cover;
}
</style>
<html>

    <body>
    <div class="imgcontainer">
      
      <img src="../pages/profile/avatar/avatar.jpeg" class="avatar">
    </div>
    <form action="" method="POST">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
        
      <button type="submit" name="loginbut">Login</button>
    </form>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="../../index.php"><button class="cancelbtn">Cancel</button></a>
     
      <span class="psw">Need an account <a href="../signup.php">Sigh Up     </a></span>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>

</html>