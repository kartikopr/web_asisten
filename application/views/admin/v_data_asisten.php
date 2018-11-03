<div class="container">
  <h3>Data Calon Asisten</h3>
  <form id="start" action="form_data_asisten" method="POST"><button type="submit" class="btn btn-primary" name="tambahdata"
      value="Tambah">Tambah </form></button>
  <div class="panel panel-default">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th width=20%>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $result): ?>
          <tr>
            <td>
              <?php echo $result['id_alternatif'];
?>
            </td>
            <td>
              <?php echo $result['nama'];
?>
            </td>
            <td>
              <?php echo $result['npm'];
?>
            </td>
            <td>
              <?php echo $result['jurusan'];
?>
            </td>
            <td>
              <?php echo $result['ipk'];
?>
            </td>
            <td><a href="update_data_asisten/<?php echo $result['id_alternatif'];?>" class="btn btn-success btn-md">Edit</a><a
                class="btn btn-danger btn-md" href="delete_data_asisten/<?php echo $result['id_alternatif']; ?>">Hapus</a></td>
          </tr>
          <?php endforeach;
?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</body>