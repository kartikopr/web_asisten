<!DOCTYPE html>
<html>
	<head>
		<title>Ranking</title>
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet" href="assets/css/v_ranking.css">
	</head>
	
	<body>

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

      <div class="container">
        <h3>Ranking</h3>
                                                                                        
          <div class="table-responsive">          
            <table class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kandidat</th>
                    <th>Nilai</th>
                </tr>
              </thead>
              <tbody>

		<?php 
		$no = 0;
		foreach($akhir as $hasil){ 
		?>
                <tr>
                  <td width=20%><?php echo $no+=1 ?></td>
                  <td width=50%><?php echo $hasil['nama'] ?></td>
                  <td width=50%><?php echo $hasil['hasil'] ?></td>
                </tr>
		<?php } ?>
              </tbody>
            </table>
          </div>
        </div>   

        
      

	  </body>
  </html>