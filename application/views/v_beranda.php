<html>
	<head>
		<title>Dashboard</title>
		<link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
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
                </ul>
                
            </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li><li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li> 
                </ul>
                 
            </div>
              
          </nav>
           
        </div>
    </div>
         
    <h1>Selamat Datang di Dashboard Admin</h1>
    
      
      
      
      
    
      
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
          <p>Copyright &copy; <?= date('Y'); ?></p>
        </div>
    </nav>

  



      </body>
     </html>