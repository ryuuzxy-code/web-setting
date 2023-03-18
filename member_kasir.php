<!DOCTYPE html>
<html>

<body>
<?php
 include "header.php"
 ?>
 <br>
 <br>
    <h3 align="center"><strong>DATA MEMBER</strong></h3>
    <br>
    <table class="table table-secondary table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>TELP</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member ");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $no++;?>
            <tr>              
                <td><?=$no?></td>
                <td><?=$data_member['nama_member']?></td> 
                <td><?=$data_member['alamat']?></td>
                <td><?=$data_member['jenis_kelamin']?></td>
                <td><?=$data_member['tlp']?></td>
            </tr>
            
            <?php 
            }   
            ?>
        </tbody>
        </table>
            <ul>
            <a href ="tambah_member_kasir.php" button class="btn btn-secondary me-md-2" type="button">Tambah Member</button>
  
    </div>   
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
