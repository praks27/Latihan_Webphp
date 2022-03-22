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
    $mkelas=8;
    $jSiswa="";
    if($jSiswa==$mkelas){
        echo "silahkan masuk kelas dan belajar";
    }else if($jSiswa!==$mkelas){
        echo "<h3>kamu terlambat!,silahkan push Up<h3>";
    }else{
        echo "Besok bawa surat izin yaa";
    }
    
    $agung="kecelakaan";
    $motor="rusak";
    $luka="iya";
    if($agung=="sehat"){
        echo "semoga agung sehat dan hati hati di jalan";
    }else if($agung=="kecelakaan" && $motor=="rusak"){
       
        if($luka=="iya"){
            echo "segera periksa ke dokter yaaa";
        }else{
            echo "Agung istirahat yaa!!";
        }
        echo " jangan lupa bawa motor ke bengkel yaa";
    }
    ?>
</body>
</html>