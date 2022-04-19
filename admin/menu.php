 <?php 
    //     $menu=array(
    //     array("id"=>"01","nm_menu"=>"dashboard","link"=>"#"),
    //     array("id"=>"02","nm_menu"=>"Blog","link"=>"#"),
    //     array("id"=>"03","nm_menu"=>"Berita","link"=>"mod-berita"),
    //     array("id"=>"04","nm_menu"=>"setting_menu","link"=>"mod-menu")
        
    // );
    $qry_menu=mysqli_query($connect_db," select * from mst_menu ") or die( "view menu" ($connect_db));
    while ($row=mysqli_fetch_array($qry_menu)){
    ?>
            <a href="?modul=<?php echo $row['link']?>">
                <li class="list-group-item w-50"><?php echo $row["nm_menu"];?></li>
        </a>

        <?php 
        }
        // endforeach;
        ?>     