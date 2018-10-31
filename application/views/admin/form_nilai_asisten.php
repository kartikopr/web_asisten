<html>
    <head>
        <title>Nilai Asisten</title>
        <link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    </head>
    <body>
      <!-- Header web -->
    <div class="container">
      <div id="header"> 
          <nav class="navbar navbar-default">

        </nav>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class = "container">
                <div class="navbar-header">
                    <a class ="navbar-brand" href="<?php site_url('asisten/v_beranda');?>">Penerimaan Asisten</a>
                </div>
                <div class="navbar-header">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('asisten/v_kriteria')?>">Bobot Perhitungan</a></li>
                    <li><a href="<?php echo site_url('asisten/v_data_asisten')?>">Data Asisten</a></li>
                    <li><a href="<?php echo site_url('asisten/v_nilai_asisten')?>">Nilai Asisten</a></li>
                     
                  </ul>
                </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li><li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li> 
                </ul>
            </div>
        </nav>
      </div>
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
                        <span class="text-danger"><?php echo form_error("bahasainggris"); ?></span>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Bahasa Inggris</label>
                        <input type="number" step="0.01" class="form-control" name="b_inggris">
                        <span class="text-danger"><?php echo form_error("bahasainggris"); ?></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Psikologi</label>
                        <input type="number" step="0.01" class="form-control" name="psikologi">
                        <span class="text-danger"><?php echo form_error("psikologi"); ?></span>
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Praktikum 1</label>
                        <input type="number" step="0.01" class="form-control" name="prak_1">
                        <span class="text-danger"><?php echo form_error("prak_1"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <label>Praktikum 2</label>
                        <input type="number" step="0.01" class="form-control" name="prak_2">
                        <span class="text-danger"><?php echo form_error("prak_2"); ?></span>
                 </div>
            </div>
         <div class="form-group row">
            <div class="col-xs-2">
        <div id ="button">
            <input type="submit" name="insert_nilai" value="Tambah" /> 
        </div>
    

        </div>
    </div>
</div>
    
       
            

          <?php echo form_close(); ?> 
        
    </body>
  </html>
