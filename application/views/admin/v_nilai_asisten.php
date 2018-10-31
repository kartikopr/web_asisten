<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href="../assets/bootstrap/css/bootstrap.css">
		<title>Data Nilai Asisten</title>
		 
     
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
        
    

    <div class="container">
      <h3>Data Nilai Asisten</h3>
                                                                                        
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Bahasa Inggris</th>
                <th>Psikologi</th>
                <th>Praktikum 1</th>
                <th>Praktikum 2</th>
                <th>Aksi</th>
              </tr>
             </thead>
            <tbody>
              <tr> <?php foreach($result as $hasil): ?> </tr>
                <td><?php echo $hasil['id_nilai']; ?></td>
                <td><?php echo $hasil['b_inggris']; ?></td>
                <td><?php echo $hasil['psikologi']; ?></td>
                <td><?php echo $hasil['prak_1']; ?></td>
                <td><?php echo $hasil['prak_2']; ?></td>
                <td>
                  <a class ="btn btn-success btn-md" href="update_nilai_asisten/<?php echo $hasil['id_nilai']?>">Edit</a> <a class = "btn btn-danger btn-md" href="delete_nilai_asisten/<?php echo $hasil['id_nilai']; ?>">Hapus</a>
                </td>
                  <?php endforeach; ?>
                
              
              </tbody>
            </table>
          </div>
        <div id ="button">
	       <form id="start" action="form_nilai_asisten" method="POST" >
            <input type="submit" name="tambahnilai" value="Tambah" />
          </form>
        </div>
        </div>   
    
        <nav class="navbar navbar-default">
            <div class="container">
              <p>Copyright Kartiko &copy; <?= date('Y'); ?></p>
            </div>
        </nav>

    </body>
</html>