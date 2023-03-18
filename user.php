<!DOCTYPE html>
<html>

<head>
  <?php
  include "header.php"
  ?>
</head>

<body>
  <br>
  <br>
  <h3 align="center"><strong>DATA USER</strong></h3>
  <br>

  <table class="table table-secondary table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>USERNAME</th>
        <th>ROLE</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "koneksi.php";
      $qry_user = mysqli_query($conn, "select * from user ");
      $no = 0;
      while ($data_user = mysqli_fetch_array($qry_user)) {
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $data_user['nama_user'] ?></td>
          <td><?= $data_user['username'] ?></td>
          <td><?= $data_user['role'] ?></td>
          <td><a href="ubah_user.php?id_user=<?= $data_user['id_user'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_user.php?id_user=<?= $data_user['id_user'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <ul>
    <a href="tambah_user.php" button class="btn btn-secondary me-md-2" type="button">Tambah User</button>
</body>
<style>
  table,
  th,
  td {
    border: 1px solid;
    border-collapse: collapse;
    text-align: center;
  }

  table {
    width: 100%;
  }

  th,
  td {
    height: 50px;
  }
</style>

</html>