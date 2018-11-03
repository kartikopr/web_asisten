
    <h2>Update Nilai Asisten</h2>
    <?php foreach($asisten as $asisten){
            ?>

    <?php echo form_open('asisten/edit_nilai_asisten/'); ?>

    <input type="hidden" class="form-control" name="id_nilai" value="<?php echo $asisten['id_nilai']; ?>">

    <div class="form-group row">
        <div class="col-xs-2">
            <label>Bahasa Inggris</label>
            <input type="text" class="form-control" name="b_inggris" value="<?php echo $asisten['b_inggris']; ?>">

        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-2">
            <label>Psikologi</label>
            <input type="text" class="form-control" name="psikologi" value="<?php echo $asisten['psikologi']; ?>">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-2">
            <label>Praktikum 1</label>
            <input type="text" class="form-control" name="prak_1" value="<?php echo $asisten['prak_1']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-2">
            <label>Praktikum 2</label>
            <input type="number" class="form-control" name="prak_2" value="<?php echo $asisten['prak_2']; ?>">

        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-2">

            <button type="submit" class="btn btn-primary" name="insert_nilai"> Update </button>

        </div>
    </div>


</div>




<?php echo form_close(); ?>
<?php
        }
        ?>
</body>