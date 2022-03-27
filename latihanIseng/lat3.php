<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Action</th>
        </tr>
    <?php
    $table=array(
        array("id"=>"j01","judul"=>"ini table ","konten"=>"ini buku"),
        array("id"=>"j02","judul"=>"ini table ","konten"=>"ini buku"),
        array("id"=>"j03","judul"=>"ini table ","konten"=>"ini buku")

    );
// tulis l disini
// looping
   foreach($table as $t):
   ?>
        <tr>
            <td><?php echo $t["id"];?></td>
            <td><?php echo $t["judul"];?></td>
            <td><?php echo $t["konten"];?></td>
            <td><a href="#">edit ,Hapus</a></td>
        </tr>
       <?php
       endforeach;
       ?>
    </table>
</body>
</html>