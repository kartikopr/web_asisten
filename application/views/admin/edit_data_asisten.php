<h2>Update Data Asisten</h2>
<?php foreach($asisten as $asisten){
            ?>
<?php echo form_open('asisten/edit_data_asisten'); ?>
<input type="hidden" class="form-control" name="id" value="<?php echo $asisten['id_alternatif']; ?>">
<div class="form-group row">
    <div class="col-xs-2">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $asisten['nama']; ?>">

    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2">
        <label for="npm">NPM</label>
        <input type="text" class="form-control" name="npm" value="<?php echo $asisten['npm']; ?>">

    </div>
</div>

<div class="form-group row">
    <div class="col-xs-2">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="<?php echo $asisten['jurusan']; ?>">

    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2">
        <label for="ipk">IPK</label>
        <input type="number" class="form-control" name="ipk" value="<?php echo $asisten['ipk']; ?>">

    </div>
</div>
<div class="form-group row">
    <div class="col-xs-2">
        <div id="button">
            <button type="submit" name="tambahdata" value="Update"> Update </button>
        </div>
    </div>
</div>
</div>





<?php echo form_close(); ?>
<?php
        }
        ?>
</body>