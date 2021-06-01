<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['signupbut'])){
        $user_name=$_POST['username'];
        $pass_word= $_POST['psw'];
        $re_pass_word=$_POST['repsw'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        if($pass_word==$re_pass_word){
            $sql_signup ="INSERT INTO tbl_user(username, password, email, phone, adress ) VALUE('".$user_name."','".$pass_word."','".$email."','".$phone."','".$adress."')";
            $row=mysqli_query($mysqli,$sql_signup);
            header("location:../login.php");
        }else{
          header("location:../sigup.php");
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
      
      <img src="login.png" class="avatar">
    </div>
    <form action="" method="POST">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" >
      <input type="text" placeholder="Enter email" name="email" >
      <input type="text" placeholder="Enter phone" name="phone" >
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <input type="password" placeholder="Re-Enter Password" name="repsw" >
        
      <button type="submit" name="signupbut">Sign Up</button>
    </form>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="../../index.php"><button class="cancelbtn">Cancel</button></a>
     
      <span class="psw"> Had an account? <a href="login.php/">Login    </a></span>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>

</html>