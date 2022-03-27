<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

<!-- header -->
<header class="bg-secondary text-center">
    <h1>hello world!!</h1>
</header>

<!-- left-menu -->
<section id="leftMenu">
    <div class="row">
    <div class="col-md-6 ">
    <?php 
    $menu=array(
    array("id"=>"01","nm_menu"=>"dashboard","link"=>"#"),
    array("id"=>"02","nm_menu"=>"Blog","link"=>"#"),
    array("id"=>"03","nm_menu"=>"Berita","link"=>"<a href='mod-berita'>mod_berita</a>"));
    ?>
        <ul  class="list-group list-group-horizontal-md">
            <li class="list-group-item list-group-item-info w-25 ">id</li>
            <li class="list-group-item list-group-item-info w-25">nama menu</li>
            <li class="list-group-item list-group-item-info w-25">link</li>
        </ul>
    <?php foreach($menu as $mn):
    ?>
        <ul class="list-group list-group-horizontal-md ">
            <li class="list-group-item w-25"><?php echo $mn["id"];?></li>
            <li class="list-group-item w-25"><?php echo $mn["nm_menu"];?></li>
            <li class="list-group-item w-25"><?php echo $mn["link"];?></li>
        </ul>
<?php 
endforeach;
?>    
</div>
    <div class="col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis nesciunt quas perspiciatis, placeat ut aspernatur asperiores magnam tempora laborum nisi, sunt quam repellat recusandae hic labore sequi amet? Minima in ullam vel, natus odio magnam ab illum eaque id adipisci quia dolores ducimus incidunt numquam tempora est, autem aspernatur.</div>
    </div>
</section>
    
<!-- content -->
<section id="content" class="row-cols-md-6">
 
</section>

</body>
</html>