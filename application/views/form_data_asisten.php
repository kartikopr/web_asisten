<html>
	<head>
		<title>Data Calon Asisten</title>
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
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
        <h2> Form Data Asisten</h2>
         <?php echo form_open('asisten/insert_data_asisten'); ?>

            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                        <span class="text-danger"><?php echo form_error("nama"); ?></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="npm">NPM</label>
                        <input type="text" class="form-control" name="npm">
                        <span class="text-danger"><?php echo form_error("npm"); ?></span>
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                        <span class="text-danger"><?php echo form_error("jurusan"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <label for="ipk">IPK</label>
                        <input type="number" step="0.01" class="form-control" name="ipk">
                        <span class="text-danger"><?php echo form_error("ipk"); ?></span>
                 </div>
            </div>
            <div class="form-group row">
                 <div class="col-xs-2">
                    <div id ="button">
              
                        <input type = "submit" name ="tanbahdata" value ="Tambah">
               
                    </div>

                </div>
            </div>
        </div>
         
            
            
            
        <?php echo form_close(); ?>  
    </body>
</html>