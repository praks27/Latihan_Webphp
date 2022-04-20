<?php 
if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']=="save")){
require_once("../../config/config.php");
require_once("../../config/konesi_db.php");
}
else{
    require_once("../config/config.php");
    require_once("../config/konesi_db.php");
}
if (isset($_GET['act'])&&($_GET['act']=="add")){
    // jika ada pengiriman variabel act=add
    $judul= "form input data";
}else if(isset($_GET['act'])&&($_GET['act']=="edit")){
    $judul="form edit data";
    $idkey=$_GET['id'];
    $qdata=mysqli_query($connect_db,"select *from mst_menu where id_menu=$idkey");
    $tmp_data=mysqli_fetch_array($qdata);
    $aktif=$data['isActive'];
    if($aktif == 1){
        $check="checked";
    }else{
        $check=" ";
    }
}else if(isset($_GET['act'])&&($_GET['act']=="save")){
    echo "simpan OKE BROO";
    $nam_menu=$_POST['nm_menu'];
    $txt_link=$_POST['link'];
    if(isset($_POST['inpt_ck'])){
        $aktif= 1;
    }else{
        $aktif=0;
    }
    $qry_insert=mysqli_query($connect_db,"insert into mst_menu (nm_menu,link,isActive) values ('$nam_menu','$txt_link','$aktif')");
    // echo $nam_menu."," .$txt_link."," ;
}else if(isset($_GET['act'])&&($_GET['act']=="update")){

}
?>