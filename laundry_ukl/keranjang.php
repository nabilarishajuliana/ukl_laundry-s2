<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#c0b3d7">
    

<?php 
    include "header.php";
?>
<h2 align="center" style="padding:20px;font-weight:bold; color:rgb(71, 65, 160)" >List Laundry</h2>
<table class="table table-hover striped" >
    <thead>
        <tr>
            <th>NO</th><th>Nama Member</th><th>paket</th><th>qty</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket): ?>
            <tr>
                <td><?=($key_paket+1)?></td><td><?=$val_paket['nama_member']?></td><td><?=$val_paket['paket']?></td><td><?=$val_paket['qty']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary" style="margin:15px; margin-right:5px;">Check Out</a>
<a href="transaksi.php" class="btn btn-primary" style="margin:15px; margin-left:0px;">Tambah</a>
<?php 
    include "footer.php";
?>
</body>
</html>