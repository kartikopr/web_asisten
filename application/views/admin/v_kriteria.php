    <div class="container">
      <h3>Bobot Perhitungan</h3>                                                                          
      <div class = "panel panel-default">
      <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th>Kriteria</th>
                <th>Bobot</th>
                <th>Atribut</th>
              </tr>
            </thead>
              <tbody>
                
                <tr> <?php foreach($result as $result): ?> </tr>
                  <td> <?php echo $result['kriteria']; ?> </td>
                  <td> <?php echo $result['bobot']; ?> </td>
                  <td> <?php echo $result['atribut']; ?> </td>
                  <?php endforeach; ?>
                
              </tbody>
          </table>
        </div>
      </div>
      </div> 
        <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
          <p>Copyright &copy; <?= date('Y'); ?></p>
      </div>
    </nav>
  </body>
</html>