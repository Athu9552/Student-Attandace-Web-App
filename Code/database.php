<?php
$hostName = "sql209.byethost7.com";
$dbUser = "b7_37410907";
$dbPassword = "@th@rv@06";
$dbName = "b7_37410907_sign_up";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
  die("Somthing Went Wrong !");
}else{
 // echo "Success";
}
?>