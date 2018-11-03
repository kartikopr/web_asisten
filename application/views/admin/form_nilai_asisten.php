
        <h2> Form Nilai Asisten</h2>
        <?php echo form_open('asisten/insert_nilai_asisten'); ?>
        
        <?php echo validation_errors(); ?>

            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Asisten</label>
                        <select name="asisten">
							<?php foreach ($ass as $assist) { ?>
							<option value="<?php echo $assist['id_alternatif'] ?>"><?php echo $assist['nama'] ?></option>
							<?php } ?>
						</select>
                        
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Bahasa Inggris</label>
                        <input type="number" class="form-control" name="b_inggris">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Psikologi</label>
                        <input type="number" class="form-control" name="psikologi">
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Praktikum 1</label>
                        <input type="number" class="form-control" name="prak_1">
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <label>Praktikum 2</label>
                        <input type="number" class="form-control" name="prak_2">
                 </div>
            </div>
         <div class="form-group row">
            <div class="col-xs-2">
        
            <button type="submit" class="btn btn-primary" name="insert_nilai"> Tambah </button>
        
    

        </div>
    </div>
</div>
    
       
            

          <?php echo form_close(); ?> 
        
    </body>
  </html>
