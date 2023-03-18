<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <br>
    <h3 style="text-align:center">Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        <br>
        <ul>
            
        <div class ="row mb-3">
            <label name="nama_user" class="col-sm-2 col-form-label">Nama User : </label>
             <div class="col-sm-10">
            <input type="text" name="nama_user" value="" class="form-control">
        </div>
        </div>

         <div class ="row mb-3">
            <label name="username" class="col-sm-2 col-form-label">Username : </label>
            <div class="col-sm-10">
            <input type="text" name="username" value="" class="form-control">
        </div>
        </div>

        <div class ="row mb-3">
            <label name="password" class="col-sm-2 col-form-label">Password : </label>
             <div class="col-sm-10">
            <input type="password" name="password" value="" class="form-control">
        </div>
        </div>

         <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Role</legend>
            <div class="col-sm-10">
            <select name="role" class="form-control">
            <option></option>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="owner">Owner</option>
            </select>
        </div>
        </fieldset>
        
        <br>
        <ul>
        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
        <a href="user.php" class="form-btn btn btn-primary">Back</a>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
