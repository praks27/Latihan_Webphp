<?php
    $angka=9;
    $poin=3;

    $hasil =$angka**$poin;
    echo  "hasilnya = ".$hasil;
?>
<hr>
<?php
    $nilai=85.5;
    if($nilai>= 85){
        echo "nilai ok";
    }else if($nilai<85){
        echo "belajar lagi";
    }
?>
<hr>
<?php
$nilai=85.5;
    switch($nilai){
        case $nilai>=85;
        echo "nilai ok";
        break;
        case$nilai <85;
        echo "belajar lagi";
        break;
    }
?>
<hr>
<?php
    $bhs_program=array("code1"=>"php","code2"=>"js","code3"=>".net");
    asort($bhs_program);
    var_dump($bhs_program);
?>
<hr>
<?php 
    for($i=0;$i<=20;$i++){
        if($i%2==0){
            echo $i;
        }
    }
?>
<hr>
<?php
    $x=0;
    while($x<=10){
        if( $x>1 && $x <=7){
        echo $x.",";
    }
    $x++;
}
?>
<hr>
<?php
    $mahasiswa=array(
        array("nama"=>"dina","quis"=>"90","tugas"=>"85"),
        array("nama"=>"maria","quis"=>"75","tugas"=>"80")
    );
   echo "nama = ".$mahasiswa[1]["nama"]." nilai quis = ".$mahasiswa[1]["quis"];
?>
<hr>
<?php
date_default_timezone_set('asia/jakarta');
echo date("l,d-F-Y  H:i:s");
?>
<?php
    function nama(){
        $nama="Aditya Sandy Bagas P";
        return $nama;
    }
    echo nama();
?>