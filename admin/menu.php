<?php 
        $menu=array(
        array("id"=>"01","nm_menu"=>"dashboard","link"=>"#"),
        array("id"=>"02","nm_menu"=>"Blog","link"=>"#"),
        array("id"=>"03","nm_menu"=>"Berita","link"=>"mod-berita"));
        ?>
        <?php foreach($menu as $mn):
        ?>
            <a href="?modul=<?php echo $mn['link']?>">
                <li class="list-group-item w-50"><?php echo $mn["nm_menu"];?></li>
        </a>
        <?php 
        endforeach;
        ?>    