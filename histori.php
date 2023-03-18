<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="assets/css/histori.css">
</head>
<html lang="en">
<body>
<?php 
    include "header.php";
?>
<br>
<br>
<h2 align="center"><strong>Histori Transaksi Laundry</strong></h2>
<table class="table table-secondary table-striped">
    <br>
    <thead>
        <tr>
        <th>NO</th>
        <th>Nama Member</th>
        <th>Nama Petugas</th>
        <th>Paket Laundry - Qty - Harga</th>
        <th>Total Harga</th>
         
                        <!-- Status Bayar = blm lunas >> batas waktu || Status Bayar = lunas >> tanggal bayar -->
                        <!--
        <?php
        include "koneksi.php";
        $qry_histori = mysqli_query($conn, "select * from transaksi order by id_transaksi desc");
        $dt_histori= mysqli_fetch_array($qry_histori);
        if($dt_histori['status_bayar'] == 'belum_lunas'){
            ?>
        <th>Batas Waktu</th>
            <?php
        } elseif ($dt_histori['status_bayar'] == 'lunas'){
            ?>
            <th>Tanggal Bayar</th>
            <?php
        }
        ?> -->
        <th>Status Bayar</th>
        <th>Status Paket</th>
        <th>Aksi</th>
        <th>Nota</th>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select transaksi.*, member.nama_member, user.nama_user from transaksi join user ON user.id_user = transaksi.id_user join member ON member.id_member = transaksi.id_member order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $total = 0;

            $no++;
            $paket_dipesan="<ol>";
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $subtotal= 0;
                $subtotal += $dt_paket['harga'] * $dt_paket['qty'];
                $paket_dipesan.= "<li>".$dt_paket['jenis_paket']."&nbsp;&nbsp;-&nbsp;&nbsp;".$dt_paket['qty']."&nbsp;&nbsp;-&nbsp;&nbsp;"."Rp. ".number_format($subtotal, 2, ',', '.')."";
                $total +=$dt_paket['harga']*$dt_paket['qty'];  
            }
            $paket_dipesan.="</ol>";
            ?>
           <tr>
            <td><?=$no?></td>
            <td><?=$dt_histori['nama_member']?></td>
            <td><?=$dt_histori['nama_user']?>
            </td>
            <td><?=$paket_dipesan?></td>
            <td> <?php
                    echo "Rp. ".number_format($total, 2, ',', '.')."";
                    ?>
            </td>
              <!-- Status Bayar = blm lunas >> batas waktu || Status Bayar = lunas >> tanggal bayar -->
                        <!-- 

            <?php
            if($dt_histori['status_bayar']=='belum_dibayar'){
                ?>
                <td><?=$dt_histori['batas_waktu']?></td>
                <?php
            } elseif ($dt_histori['status_bayar'] == 'lunas'){
                ?>
                <td><?=$dt_histori['tgl_bayar']?></td>
                <?php
            }
            ?>-->
            <td><?=$dt_histori['status_bayar']?></td>
            <td><?=$dt_histori['status_order']?></td>
            <td>
                <?php
                if($dt_histori['status_bayar'] == "belum_dibayar"){
                    ?>
                    <a href="ubah_status.php?id_transaksi=<?=$dt_histori['id_transaksi']?> "><button class="btn btn-primary">Lunas</button></a> |
                    <?php
                } else {
                    ?>
                    <a href="#"><button class="btn btn-primary" class = "done" >✔</button></a> |
                    <?php
                }
                ?>
                <?php
                if ($dt_histori['status_order'] == "baru"){
                    ?>
                    <a href="ubah_status_paket.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=proses" ><button class="btn btn-primary">Diproses</button></a>
                    <?php
                } elseif 
                    ($dt_histori['status_order'] == "proses"){
                        ?>
                        <a href="ubah_status_paket.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=selesai" ><button class="btn btn-primary">Selesai</button></a>
                    <?php
                } elseif
                    ($dt_histori['status_order'] == "selesai"){
                        ?>
                        <a href="ubah_status_paket.php?id_transaksi=<?=$dt_histori['id_transaksi']?>&status_order=diambil"><button class="btn btn-primary">Diambil</button></a>
                    <?php
                } elseif
                    ($dt_histori['status_order'] == "diambil"){
                        ?>
                        <a href="#"><button class="btn btn-primary" class = "done" >✔</button></a>
                        <?php
                    }
                    ?>
                     <?php
                     $button_cetak_detail="<a href='detail_transaksi.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Cetak Transaksi</a>";
                    ?>
                    <td><?=$button_cetak_detail?></td>
                    <?php        
                        }
                    ?>
                    
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<ul>
<?php
            if ($_SESSION['role']=="admin"){
            ?>
            <a href="hapus_histori.php" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-secondary"> Hapus Histori</a>
              <?php
            }
            else if ($_SESSION['role']=="kasir"){
            ?> 
             <a href="pesan.php" class="btn btn-secondary"> Tambah Transaksi</a>
            <?php
            }
            else if ($_SESSION['role']=="owner"){
            ?>  
             <?php
            }
            ?>
    </body>
</html>