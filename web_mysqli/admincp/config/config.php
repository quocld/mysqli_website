<?php
    
    $mysqli = new mysqli("ec2-54-91-188-254.compute-1.amazonaws.com","dlpyuedphkuxkv
","28bf6138b9f274a22697fb6f2d531c02f86b95e700ddb2e1bca20935d7ba57c8","dcok9uvp4rl5h8
");
    
    
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    
?>
