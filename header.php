<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Laundry Uhuy</title>

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float" style="background-color: #e3f2fd;">
      <div class="container">
        <a href="header.php" class="navbar-brand">Laundry<span class="text-primary">Uhuy</span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
          
          <?php
            if ($_SESSION['role']=="admin"){
            ?>
            <li class="nav-item-active">
              <a  href="home.php" class="nav-link">Home</a>
            </li>
              <li class="nav-item ">
              <a  href="user.php" class="nav-link">User</a>
            </li>
            <li class="nav-item">
              <a href="paket.php" class="nav-link">Paket</a>
            </li>
             <li class="nav-item">
              <a href="member.php" class="nav-link">Member</a>
            </li>
            <li class="nav-item">
              <a href="pesan.php" class="nav-link">Transaksi</a>
            </li>
            <li class="nav-item">
              <a href="histori.php" class="nav-link">History Transaksi</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a href="logout.php" class="btn btn-outline rounded-pill" onclick="return confirm('Apakah anda yakin untuk keluar ?')">Logout</a>
          </div>
          <?php
            }
            else if ($_SESSION['role']=="kasir"){
            ?> 
            <li class="nav-item-active">
              <a  href="home.php" class="nav-link">Home</a>
            </li>
             <li class="nav-item">
              <a href="member_kasir.php" class="nav-link">Member</a>
            </li>
            <li class="nav-item">
              <a href="pesan.php" class="nav-link">Transaksi</a>
            </li>
            <li class="nav-item">
              <a href="histori.php" class="nav-link">History Transaksi</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a href="logout.php" class="btn btn-outline rounded-pill" onclick="return confirm('Apakah anda yakin untuk keluar ?')">Logout</a>
          </div>
          <?php
            }
            else if ($_SESSION['role']=="owner"){
            ?>  
            <li class="nav-item-active">
              <a  href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="histori.php" class="nav-link">History Transaksi</a>
            </li>
          </ul>
          <div class="ml-auto">
            <a href="logout.php" class="btn btn-outline rounded-pill" onclick="return confirm('Apakah anda yakin untuk keluar ?')">Logout</a>
          </div>
          <?php
            }
            ?>
        </div>
      </div>
    </nav>

 
            
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="/assets/img/bg_image_1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>