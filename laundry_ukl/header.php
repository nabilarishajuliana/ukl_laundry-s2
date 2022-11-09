<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 4px 4px 5px -4px;background-color:rgb(71, 65, 160); ">
      <div class="container-fluid"  >
        <a class="navbar-brand" href="#" style="color:white;">Laundry lovefy ❤</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav" >
            <?php
            if ($_SESSION['role']=="admin"){
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_paket.php" style="color:white;">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_member.php" style="color:white;">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_user.php" style="color:white;">user</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="data.php" style="color:white;">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_laundry.php" style="color:white;">laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php" style="color:white;">Logout</a>
            </li>
            <?php
            }
            else if ($_SESSION['role']=="kasir"){
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tambah_member.php" style="color:white;">Tambah member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="data.php" style="color:white;">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_laundry.php" style="color:white;">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php" style="color:white;">Logout</a>
            </li>
            <?php
            }
            else if ($_SESSION['role']=="owner"){
            ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_laundry.php" style="color:white;">Laporan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php" style="color:white;">Logout</a>
            </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
