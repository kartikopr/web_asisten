<html>
    <head>
        <title>Nilai Asisten</title>
        <link rel='stylesheet' type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
    </head>
    <body>
    <div class="container">
      <div id="header">   
        <nav class="navbar navbar-default">

        </nav>    
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class = "container">
              <div class="navbar-header">
                    <a class ="navbar-brand" href="<?php echo site_url('asisten/v_beranda');?>">Penerimaan Asisten</a>
              </div>
                
                <div class="navbar-header">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('asisten/v_kriteria')?>">Bobot Perhitungan</a></li>
                    <li><a href="<?php echo site_url('asisten/v_data_asisten')?>">Data Asisten</a></li>
                    <li><a href="<?php echo site_url('asisten/v_nilai_asisten')?>">Nilai Asisten</a></li>
                    <li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li>
                  </ul>
                
                        
                            
                </div>       
                
            </div>
        </nav>
    </div>
        <h2>Update Nilai Asisten</h2>
         <?php foreach($asisten as $asisten){
            ?>
      
       <?php echo form_open('asisten/edit_nilai_asisten/'); ?>

	<input type="text" class="form-control" name="id_nilai" value="<?php echo $asisten['id_nilai']; ?>">

            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Bahasa Inggris</label>
                        <input type="text" class="form-control" name="b_inggris" value="<?php echo $asisten['b_inggris']; ?>">
                        <span class="text-danger"><?php echo form_error("bahasainggris"); ?></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Psikologi</label>
                        <input type="text" class="form-control" name="psikologi" value="<?php echo $asisten['psikologi']; ?>">
                        <span class="text-danger"><?php echo form_error("psikologi"); ?></span>
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Praktikum 1</label>
                        <input type="text" class="form-control" name="prak_1" value="<?php echo $asisten['prak_1']; ?>">
                        <span class="text-danger"><?php echo form_error("prak_1"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <label>Praktikum 2</label>
                        <input type="number" class="form-control" name="prak_2" value="<?php echo $asisten['prak_2']; ?>">
                        <span class="text-danger"><?php echo form_error("prak_2"); ?></span>
                 </div>
            </div>
        <div class="form-group row">
            <div class="col-xs-2">
                <div id ="button">
                    <input type="submit" name="insert_nilai" value="Update" /> 
                </div>
            </div>
        </div>


</div>
        
   
            
            
          <?php echo form_close(); ?> 
          <?php
        }
        ?>
    </body>
  </html>