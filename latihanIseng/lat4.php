<?php
    // $kata="saya sedang belajar PHP";
    //     $kata=explode(" ",$kata);
    // var_dump($kata);
    // echo "<hr>";
    // echo $kata[1];
    // echo "<hr>";
    // $kata2=implode(" ",$kata);
    // var_dump($kata2);
    // echo "<hr>";
    // echo $kata2;
// $kata1="aku pasti BISA makan";
// // echo $kata1;
// echo strtolower($kata1);
// // echo str_replace("bisa","iso",$kata1);
// echo "<hr>";
// $kata="dragonball";
// // echo $kata;
// echo str_replace("ball","radar",$kata);

$angka=intval("298");
$angka2="59,99";
$angka3="789,87";
// echo $angka;
echo (double)$angka2;
echo (float)$angka3;
echo (int)$angka;


// echo ceil(0.7); // Hasilnya = 1


// echo floor(0.7); // Hasilnya = 0


// echo round(0.5); // Hasilnya = 1


    // echo "<hr>";
    // echo date("l,d-F-Y");
    // echo "<hr>";
    // echo "tanggal Hari ini ".date("d-m-y")." atau ".date("y-m-d");
    // echo "<hr>";
    // date_default_timezone_set('asia/jakarta');
    // echo "waktu sekarang = ".date("d-m-Y H:i:s");
    // echo "<hr>";
    // $tgllahir=date_create("27-01-2003");
    // $tglskrg=date("d-m-Y");
    // $usia=date_diff($tgllahir,date_create($tglskrg));
    // echo "umur= ".$usia->format('%ytahun %m bulan');
    // echo "<hr>";
    // echo "umur= ".$usia->format('%a hari');
?>
<!-- function PHP -->
<!-- <?php 
function dataPribadi(){
    $nama="Aditya Sandy";
    $asal="Surabaya";
    echo "hallo,nama saya ".$nama." Saya berasal dari ".$asal;

}
echo "<hr>";dataPribadi();
?>
<?php
function ceksaldo($saldo,$akun){
    if($saldo>=3000000){
        $thr=$saldo*10/100;
    }else if($saldo>=1000000){
        $thr=($saldo*20/100);
    }else if($saldo<=1000000){
        $thr=0;
    }
    return "kamu mendapatkan THR : ".$thr." dari saldo : ".$saldo." AC : ".$akun;
}
echo "<hr>".ceksaldo(2000000,"Doni");
?> -->