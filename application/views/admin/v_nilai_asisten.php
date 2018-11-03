<div class="container">
  <h3>Data Nilai Asisten</h3>
  <form id="start" action="form_nilai_asisten" method="POST">
    <button type="submit" name="tambahnilai" value="Tambah" class="btn btn-primary" /> Tambah
  </form>
  </button>
  <div class="panel panel-default">
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
          <tr>
            <?php foreach($result as $hasil): ?>
          </tr>
          <td>
            <?php echo $hasil['id_alternatif']; ?>
          </td>
          <td>
            <?php echo $hasil['b_inggris']; ?>
          </td>
          <td>
            <?php echo $hasil['psikologi']; ?>
          </td>
          <td>
            <?php echo $hasil['prak_1']; ?>
          </td>
          <td>
            <?php echo $hasil['prak_2']; ?>
          </td>
          <td>
            <a class="btn btn-success btn-md" href="update_nilai_asisten/<?php echo $hasil['id_nilai']?>">Edit</a> <a
              class="btn btn-danger btn-md" href="delete_nilai_asisten/<?php echo $hasil['id_nilai']; ?>">Hapus</a>
          </td>
          <?php endforeach; ?>


        </tbody>
      </table>
    </div>
  </div>


</div>

</body>