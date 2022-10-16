<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    include "header.php";
    ?>
    <h3>Tambah Member</h3>
    <form action="proses_tambah_member.php" method="post">
        <!-- nama -->
        Nama Member
        <input type="text" name="nama_member" value="" class="form-control">
        <!-- alamat -->
        Alamat
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        <!-- gender -->
        Gender
        <select name="jk" class="form-control">
            <option></option>
            <option value="L">laki laki</option>
            <option value="P">perempuan</option>
        </select>
        <!-- telp -->
        No Hp
        <input type="text" name="tlp" value="" class="form-control"><br>
        
        <input type="submit" name="simpan" value="SUBMIT" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>