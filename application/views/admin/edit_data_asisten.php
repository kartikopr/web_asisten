<html>
	<head>
		<title>Update Data Asisten</title>
		<link rel='stylesheet' type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
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
                    <li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li> 
                  </ul>
                </div>
            </div>
        </nav>
      </div>
            <h2>Update Data Asisten</h2>
    <?php foreach($asisten as $asisten){
            ?>
          <?php echo form_open('asisten/edit_data_asisten'); ?>
			<input type="hidden" class="form-control" name="id" value="<?php echo $asisten['id_alternatif']; ?>">
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $asisten['nama']; ?>">
                        <span class="text-danger"><?php echo form_error("nama"); ?></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="npm">NPM</label>
                        <input type="text" class="form-control" name="npm" value="<?php echo $asisten['npm']; ?>">
                        <span class="text-danger"><?php echo form_error("npm"); ?></span>
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="<?php echo $asisten['jurusan']; ?>">
                        <span class="text-danger"><?php echo form_error("jurusan"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <label for="ipk">IPK</label>
                        <input type="number" class="form-control" name="ipk" value="<?php echo $asisten['ipk']; ?>">
                        <span class="text-danger"><?php echo form_error("ipk"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <div id ="button">
                        <input type="submit" name="tambahdata" value="Update" /> 
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
