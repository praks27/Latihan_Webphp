<?php
    include_once("menuCtrl.php")
?>
<?php
if(!isset($_GET['act'])){
?>
<div class="container-fluid">
<a href="?modul=mod-menu&act=add" class="btn btn-primary mb-1 ">Tambah data</a>
    <table class="table table-bordered">
        <tr>
            <th>ID_menu</th>
            <th>nama menu</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        <?php
        $qry_listmenu=mysqli_query($connect_db,"select * from mst_menu order by id_menu DESC") or 
        die("gagal akses broo !!!"($connect_db));
        while($row = mysqli_fetch_array($qry_listmenu)){   
        ?>
        <tr>
            <td><?php echo $row['id_menu']; ?></td>
            <td><?= $row['nm_menu']; ?></td>
            <td><?= $row['link']; ?></td>
            <td>
                <a href="?modul=mod-menu&act=edit&id=<?=$row['id_menu']?>" class="btn btn-info">
                    <i class="bi bi-pencil-square">edit</i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-trash-fill">delete</i>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php
    } //ini penutup php
    else if(isset($_GET['act'])&&($_GET['act']=="add")){
?>
<div class="container mt-5">
    <form action="mod-menu/menuCtrl.php?modul=mod-menu&act=save" method="POST">
        <h3><?= $judul ?></h3>
    <div class="row ">
        <div class="col-md-2">
            <label for="nm_menu" class="form-label">Nama Menu</label>
        </div>
        <div class="col-md-7">
            <input type="text" name="nm_menu" class="form-control">
        </div>
    </div>
    <div class="row my-3">
        <div class=" form group col-md-2">
            <label for="link" class="form-label">Link</label>
        </div>
            <div class="form-group col-md-7">
                <input type="text" name="link" class="form-control">
                <input type="checkbox" class="form-check-input" name="inpt_ck">
                <label for="i_checkbox" class="form-check-label">aktif</label><br>
                <button type="submit" class="btn btn-outline-success" name="btn_save">
                    <i class="bi bi-save"> simpan</i> 
                </button>
                <button type="reset" name="btn_reset" class="btn btn-outline-danger"><i class="bi bi-backspace-fill">reset</i> </button>
                <a href="?modul=mod-menu" class="btn btn-outline-secondary" name="cancel">
                    <i class="bi bi-x-square-fill"> batal</i> 
                </a>
            </div>
        </div>
    </form>
</div>
<?php
    }
    else if(isset($_GET['act'])&&($_GET['act']=="edit")){
?>
<div class="container mt-5">
    <form action="mod-menu/menuCtrl.php?modul=mod-menu&act=save" method="POST">
        <h3><?= $judul ?></h3>
    <div class="row ">
        <div class="col-md-2">
            <label for="nm_menu" class="form-label">Nama Menu</label>
        </div>
        <div class="col-md-7">
            <input type="text" name="nm_menu" class="form-control" value="<?=$tmp_data ['nm_menu'] ?>">
        </div>
    </div>
    <div class="row my-3">
        <div class=" form group col-md-2">
            <label for="link" class="form-label">Link</label>
        </div>
            <div class="form-group col-md-7">
                <input type="text" name="link" class="form-control" value="<?=$tmp_data['link']?>">
                <input type="checkbox" class="form-check-input" name="inpt_ck">
                <label for="i_checkbox" class="form-check-label">aktif</label><br>
                <button type="submit" class="btn btn-outline-success" name="btn_save">
                    <i class="bi bi-save"> simpan</i> 
                </button>
                <button type="reset" name="btn_reset" class="btn btn-outline-danger"><i class="bi bi-backspace-fill">reset</i> </button>
                <a href="?modul=mod-menu" class="btn btn-outline-secondary" name="cancel">
                    <i class="bi bi-x-square-fill"> batal</i> 
                </a>
            </div>
        </div>
    </form>
</div>
<?php } ?>