<?php
$conn_string = "host=ec2-54-91-188-254.compute-1.amazonaws.com
"
        . " port=5432 dbname=dcok9uvp4rl5h8
"
        . " user=dlpyuedphkuxkv"
        . " password=28bf6138b9f274a22697fb6f2d531c02f86b95e700ddb2e1bca20935d7ba57c8
";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
