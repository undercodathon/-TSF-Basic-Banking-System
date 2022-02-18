<?php   
 $db_host= "localhost";
 $db_user= "root";
 $db_pass= "";
 $db_name= "tsf_database";

 $conn=mysqli_connect($db_host,$db_user, $db_pass, $db_name);
 if($conn)
 {


 }
 else
 {
   die ("Database connection Failed!");
 }
?>