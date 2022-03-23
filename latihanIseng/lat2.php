<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nilai =array(60,70,80,75,90);
sort($nilai);
var_dump($nilai);
echo $nilai[2];
?>
<hr>
<?php
$dtnilai = array("dina"=>80,"sinta"=>90,"nia"=>85);
asort($dtnilai);
var_dump($dtnilai);
echo "<br>".$dtnilai["sinta"]."<br>";
?>
<?php
// for($i=2 ; $i<=13 ; $i++){
//     echo $i.",";
// }
$a=0;
while($a<=13){
        if($a>1){
        echo $a.",";
    }
$a++;
}
$s=0;
do{
    if($s > 1)
    echo $s.",";
    $s++;
}while($s<14);
?>
<br>
<?php
for($g=0; $g<=30; $g++){
   if($g%2==0){
       echo "<b>".$g."</b>";
   }else{
       echo "<u>".$g."</u>";
   }
}
?>
<?php
// for($h=0;$h<31;$g++){
//     if($g%2==0){
//         echo "<b>bilangan genap = ".$g."</b>";
//     }
// }

?>
<br>
<?php
    $mhs=array("putra","ardi","galang","adit","sultan","agung");
    foreach($mhs as $m){
        echo $m.",";
    }
    echo "<br>".$mhs[1];
?>
<br>
<?php 
$databarang=array(
    array("kode"=>"B01","nama"=>"buku","harga"=>"Rp.50000"),
    array("kode"=>"B02","nama"=>"pulpen","harga"=>"Rp.10000"),
    array("kode"=>"B03","nama"=>"penghapus","harga"=>"Rp.5000")
);
foreach($databarang as $barang){
    echo $barang["kode"].$barang["nama"].$barang["harga"]."<br>";
}
?>
</body>
</html>