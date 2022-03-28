<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<style>
    a{
        text-decoration: none;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">admin</a>
        </li>
      </form>
    </div>
  </div>
</nav>
<!-- header -->
<header class="bg-secondary text-center">
    <h1>Tugas WebProgramming</h1>
</header>

<!-- left-menu -->
<section id="leftMenu">
    <div class="row">
        <div class="col-md-6">
        <?php 
        $menu=array(
        array("id"=>"01","nm_menu"=>"dashboard","link"=>"#"),
        array("id"=>"02","nm_menu"=>"Blog","link"=>"#"),
        array("id"=>"03","nm_menu"=>"Berita","link"=>"mod-berita"));
        ?>
        <?php foreach($menu as $mn):
        ?>
            <a href="<?php echo $mn['link']?>">
                <li class="list-group-item w-25"><?php echo $mn["nm_menu"];?></li>
        </a>
        <?php 
        endforeach;
        ?>    
    </div>
        <div class="col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis nesciunt quas perspiciatis, placeat ut aspernatur asperiores magnam tempora laborum nisi, sunt quam repellat recusandae hic labore sequi amet? Minima in ullam vel, natus odio magnam ab illum eaque id adipisci quia dolores ducimus incidunt numquam tempora est, autem aspernatur.</div>
    </div>
</section>
</body>
</html>