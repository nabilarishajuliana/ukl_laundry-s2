<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body style="background-color:#c0b3d7">
<?php
    include "header.php";
    ?>
    <div class="container" style="width:800px; padding:20px;">
        <div class="card" style="width:800px; ">
            <div class="card-header">
    <h3 align="center" style="font-weight:bold; color:rgb(71, 65, 160)">Tampil Paket</h3>
</div>
<div class="card-body">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>JENIS</th><th>HARGA</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_paket=mysqli_query($conn,"select * from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
            $no++;?>
<tr>              <td><?=$no?></td>
                  <td><?=$data_paket['jenis']?></td>
                  <td>Rp. <?=$data_paket['harga']?></td>
                  
                  <td><a href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>
        </div>
    <a href="tambah_paket.php" class='btn btn-warning'>Tambah paket</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>
</html>
