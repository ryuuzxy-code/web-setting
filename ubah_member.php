<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <br>
    <h3 style="text-align:center">Perubahan Data Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        <br>
        <ul>
        <div class ="row mb-3">
            <label name="nama_member" class="col-sm-2 col-form-label">Nama Member : </label>
        <div class="col-sm-10">
        <input type="text" name="nama_member" value=   "<?=$dt_member['nama_member']?>" class="form-control">
        </div>
        </div>
        
        <div class ="row mb-3">
            <label name="alamat" class="col-sm-2 col-form-label">Alamat : </label>
        <div class="col-sm-10">
        <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">
        </div>
        </div>
       
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender : </legend>
            <div class="col-sm-10">
       <select name="jenis_kelamin" class="form-control">
        <option></option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki Laki">Laki-Laki</option>
        </select>
        </div>
        </fieldset>
                
        <div class ="row mb-3">
            <label name="tlp" class="col-sm-2 col-form-label">Telp : </label>
        <div class="col-sm-10">
        <input type="text" name="tlp" value="<?=$dt_member['tlp']?>" class="form-control">
        </div>
        </div>
        <br>
        <ul>
                <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
                <a href="member.php" class="form-btn btn btn-primary">Back</a>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
