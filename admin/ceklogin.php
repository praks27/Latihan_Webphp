<?php
require_once("../config/konesi_db.php");
require_once("../config/config.php");
?>
<?php
// $userdb="AdityaS";
// $passdb=md5("123456");
if(isset($_POST['btnlogin'])){
    $txt_user=$_POST['username'];
    $txt_pass=md5($_POST['password']);
    $result=mysqli_query($connect_db,
    "select * from mst_userlogin where username = '".$txt_user."'AND password = '".$txt_pass."'AND is_active='1'");
    if(mysqli_num_rows($result)>0){
        echo "hasil = ".mysqli_num_rows($result);
        header("Location: ".URL."home.php");
    }else{
        header("Location: ".URL."");
    }
    //     if($txt_user==$userdb&&$txt_pass==$passdb){
    //         // echo "login berhasil";
    //         header("location: http://localhost/Latihan_Webphp/admin/home.php ");
    //     }elseif($txt_user==$userdb&&$txt_pass!==$passdb){
    //         echo "silahkan cek user dan password anda lagi";
    //     }else if($txt_user!==$userdb&&$txt_pass==$passdb){
    //         echo "silahkan cek username anda";
    //     }else{
    //         header("location: http://localhost/Latihan_Webphp/admin/");
    // }
}




// echo $txt_user."<br/>";
// echo $txt_pass;
?>