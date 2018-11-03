<body>


      <div class="container">
      <div class = "panel panel-heading">
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
        </div>    
         
        <div class="container">
        <div class = "panel panel-heading">
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
        </div>
         

	  </body>
