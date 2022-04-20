<?php
$username="localhost";
$database="dblatihan";
$user_db="root";
$pass_db="";

$connect_db=mysqli_connect($username,$user_db,$pass_db,$database);
 if(!$connect_db){
     echo "<h3>Koneksi gagal!!</h3>";
     exit;
 }
// set_database
// mysqli_select_db($connect_db,$database);
?>