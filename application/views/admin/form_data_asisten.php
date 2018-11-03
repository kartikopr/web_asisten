<div class="container">
    <h2> Form Data Asisten</h2>
    <?php echo form_open('asisten/insert_data_asisten'); ?>

    <div class="form-group row">
        <div class="col-xs-2">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-2">
            <label for="npm">NPM</label>
            <input type="text" class="form-control" name="npm">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-2">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" name="jurusan">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-2">
            <label for="ipk">IPK</label>
            <input type="number" step="0.01" class="form-control" name="ipk">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-2">
            <div id="button">

                <button type="submit" class="btn btn-primary" name="tambahdata" value="Tambah"> Tambah </button>

            </div>

        </div>
    </div>
</div>
</div>




<?php echo form_close(); ?>
</body>