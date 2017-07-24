<!DOCTYPE html>
<html>
	<head>
		<title>Hasil Perhitungan</title>
		<link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel ="stylesheet" href="assets/css/v_hasilperhitungan.css">
	</head>
	
	<body>

     <div class="container">
      <div id="header">  
          <nav class="navbar navbar-default">

            </nav>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class = "container">
                <div class="navbar-header">
                    <a class ="navbar-brand" href="<?php echo site_url('asisten/v_home');?>">Penerimaan Asisten</a>
                </div>
                <div class="navbar-header">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('asisten/v_hasil_perhitungan')?>">Hasil Perhitungan</a></li>
                    <li><a href="<?php echo site_url('asisten/v_ranking')?>">Ranking</a></li>
                    
                </ul>
                </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li><li><a href="<?php echo site_url('asisten/logout')?>">Logout</a></li> 
                </ul>
            </div>
        </nav>
      </div>
  </div>
-

      <div class="container">
        <h3>Tabel Kecocokan Alternatif dan Kriteria</h3>
                                                                                        
          <div class="table-responsive">          
            <table class="table">
              <thead>
                <tr>
                    <th>Nama</th>
                    <th>Bahasa Inggris</th>
                    <th>Psikologi</th>
                    <th>Praktikum 1</th>
                    <th>Praktikum 2</th>
                    
                </tr>
              </thead>
              <tbody>
                <tr> <?php foreach($result as $hasil): ?> </tr>
                  <td><?php echo $hasil->nama;?></td>
                  <td><?php echo $hasil->b_inggris;?></td>
                  <td><?php echo $hasil->psikologi;?></td>
                  <td><?php echo $hasil->prak_1;?></td>
                  <td><?php echo $hasil->prak_2;?></td>   
                <?php endforeach; ?> 
                
                
                </tbody>
            </table>
          </div>
        </div>    
         
        <div class="container">
            <h3>Matriks Ternormalisasi</h3>
       
         <div class="table-responsive">          
            <table class="table">
              <thead>
                <tr>
                    <th>Bahasa Inggris</th>
                    <th>Psikologi </th>
                    <th>Praktikum 1</th>
                    <th>Praktikum 2</th>
                    
                </tr>
              </thead>
              <tbody>
                  <?php foreach($matkul as $apa):?>
                <tr>
                  <td><?php echo $apa['nilai_inggris']; ?></td>
		  <td><?php echo $apa['nilai_psikologi']; ?></td>
		  <td><?php echo $apa['nilai_prak1']; ?></td>
		  <td><?php echo $apa['nilai_prak2']; ?></td>

                </tr>
                  <?php endforeach; ?>
              
              </tbody>
            </table>
          </div>
        </div>
         

	  </body>
  </html>