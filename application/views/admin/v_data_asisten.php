<!DOCTYPE html>
<html>
	<head>
		<title>Data Calon Asisten</title>
		  <link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.css">
      <link rel ="stylesheet" href="assets/css/v_hasilperhitungan.css">
      <script src = "../assets/bootstrap/js/bootstrap.min.js"></script>
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

      <div class="container">
        <h3>Data Calon Asisten</h3>
                                                                                        
          <div class="table-responsive">          
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Jurusan</th>
                    <th>IPK</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($result as $result): ?>
                <tr>  
                  <td><?php echo $result['id_alternatif']; ?></td>
                  <td><?php echo $result['nama']; ?></td>
                  <td><?php echo $result['npm']; ?></td>
                  <td><?php echo $result['jurusan']; ?></td>
                  <td><?php echo $result['ipk']; ?></td>
                  <td>
                  <a href="update_data_asisten/<?php echo $result['id_alternatif'];?>" class="btn btn-success btn-md">Edit</a> <a class="btn btn-danger btn-md" href="delete_data_asisten/<?php echo $result['id_alternatif']; ?>">Hapus</a>
                  </td>
                  
                </tr> 
                <?php endforeach; ?> 
              </tbody>
            </table>
          </div>
        </div>   

        <div class="container">   
          
          <div id ="button">
	       <form id="start" action="form_data_asisten" method="POST" >
            <input type="submit" name="tambahdata" value="Tambah" />
          </form>
              <br>
        </div>
        </div>
        
        
        
    <nav class="navbar navbar-default">
      <div class="container">
          <p>Copyright &copy; <?= date('Y'); ?></p>
      </div>
    </nav>
      

	  </body>
  </html>
  
 
