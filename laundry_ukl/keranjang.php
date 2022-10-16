<?php 
    include "header.php";
?>
<h2>List</h2>
<table class="table table-hover striped">
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
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<a href="transaksi.php" class="btn btn-primary">Tambah</a>
<?php 
    include "footer.php";
?>
