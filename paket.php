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
    <h3 align="center"><strong>JENIS PAKET</strong></h3>
    <br>
    <table class="table table-secondary table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Paket</th>
                <th>Harga</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select * from paket ");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
            $no++;?>
            <tr>              
                <td><?=$no?>
                </td><td><?=$data_paket['jenis_paket']?></td> 
                <td><?=$data_paket['harga']?></td>
                <td><a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> |
                <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <ul>
    <a href ="tambah_paket.php" button class="btn btn-secondary me-md-2" type="button">Tambah Paket</button>
</body>
<style>
    table, th, td {
  border: 1px solid;
  border-collapse: collapse;
  text-align: center;
}

table {
  width: 85%;
}

th, td {
  height: 50px;
}
</style>
</html>
