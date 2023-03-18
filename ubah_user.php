<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <br>
    <h3 style="text-align:center">Perubahan Data User</h3>
    <form action="proses_ubah_user.php" method="post">
        <input type="hidden" name="id_user" value= "<?=$dt_user['id_user']?>">
        <br>
        <ul>
         <div class ="row mb-3">
            <label name="nama_user" class="col-sm-2 col-form-label">Nama User : </label>
        <div class="col-sm-10">
        <input type="text" name="nama_user" value=   "<?=$dt_user['nama_user']?>" class="form-control">
        </div>
        </div>
        
        <div class ="row mb-3">
            <label name="username" class="col-sm-2 col-form-label">Username : </label>
        <div class="col-sm-10">
        <input type="text" name="username" value="<?=$dt_user['username']?>" class="form-control">
        </div>
        </div>
        
        <div class ="row mb-3">
            <label name="password" class="col-sm-2 col-form-label">Password : </label>
        <div class="col-sm-10">
        <input type="password" name="password" value="" class="form-control">
        </div>
        </div>

       <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Role : </legend>
            <div class="col-sm-10">
        <select name="role" class="form-control">
             <option></option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">owner</option>
            </select>
            </div>
            </fieldset>
            <br>
            <ul>
                <input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
                <a href="user.php" class="form-btn btn btn-primary">Back</a>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
