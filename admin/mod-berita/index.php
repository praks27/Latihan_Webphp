<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <style>
        table, th, td{
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        }
    </style>

</head>
<body>
<section>
<!-- Button trigger modal -->
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  tambahkan konten
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">form tambah konten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
            <div class="mb-3">
                <div class="form-label">id</div>
                <input class="form-control" type="text" name="id" placeholder="masukkan id">
            </div>
            <div class="mb-3">
                <div class="form-label">judul</div>
                <input class="form-control" type="text" name="judul" placeholder="masukkan judul">
            </div>
            <div class="mb-3">
                <div class="form-label">konten</div>
                <textarea class="form-control" name="konten" placeholder="masukkan konten"></textarea>
            </div>
            <div class="mb-3">
                <div class="form-label">action</div>
                <input class="form-control" type="text" name="action" placeholder="masukkan action">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <table cellspacing="2px" >
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Action</th>
                </tr>
            <?php
            // tulis array disini
            $table=array(
                array("id"=>"01","judul"=>"judul satu  ","konten"=>"isi berita 01.."),
                array("id"=>"02","judul"=>"judul dua  ","konten"=>"isi berita 02.."),
                array("id"=>"03","judul"=>"judul tiga ","konten"=>"isi berita 03..")
            );
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
         </div>
        </div>
    </section>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>