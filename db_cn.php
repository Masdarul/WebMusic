<?php

$server_name = "localhost";
$user_name = "root";
$user_password = "";
$db_name = "login_user";

$cn = mysqli_connect($server_name,$user_name,$user_password,$db_name);
if (!$cn) {
    die ('Connection failed:');
} 
// else {
//     echo ("Database Succes");
// }

?>