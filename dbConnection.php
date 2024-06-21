<?php
$db_host = "sql305.infinityfree.com";
$db_user = "if0_36759390";//old user_name=root
$db_password = "kSoepq7fuo";
$db_name = "if0_36759390_elearning";//old databasename=elearning

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>