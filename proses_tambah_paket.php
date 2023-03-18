<?php
if($_POST){
    $paket=$_POST['jenis_paket'];
    $harga=$_POST['harga'];
    if(empty($paket)){
        echo "<script>alert('paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
 
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis_paket, harga) value ('".$paket."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='paket.php';</script>";
        }
    }
}
?>
