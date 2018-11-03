

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