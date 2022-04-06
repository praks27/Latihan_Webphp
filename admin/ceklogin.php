<?php
$userdb="AdityaS";
$passdb=md5("123456");

$txt_user=$_POST['username'];
$txt_pass=md5($_POST['password']);

if($txt_user==$userdb&&$txt_pass==$passdb){
    // echo "login berhasil";
    header("location: http://localhost/Latihan_Webphp/admin/home.php ");
}elseif($txt_user==$userdb&&$txt_pass!==$passdb){
    echo "silahkan cek user dan password anda lagi";
}else if($txt_user!==$userdb&&$txt_pass==$passdb){
    echo "silahkan cek username anda";
}else{
    header("location: http://localhost/Latihan_Webphp/admin/");
}




// echo $txt_user."<br/>";
// echo $txt_pass;
?>