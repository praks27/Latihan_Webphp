<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>ID_menu</th>
            <th>nama menu</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="#" class="btn btn-info">
                    <i class="bi bi-pencil-square">edit</i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="bi bi-trash-fill">delete</i>
                </a>
            </td>
        </tr>
    </table>
</div>
<div class="container mt-5">
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
            <input type="checkbox" class="form-check-input" name="i_checkbox">
            <label for="i_checkbox" class="form-check-label">aktif</label><br>
            <button type="button" class="btn btn-outline-success" name="save">
                <i class="bi bi-save"> simpan</i> 
            </button>
            <button type="button" class="btn btn-outline-secondary" name="cancel">
                <i class="bi bi-x-square-fill"> batal</i> 
            </button>
        </div>
    </div>
</div>