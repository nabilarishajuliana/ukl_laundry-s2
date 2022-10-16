<?php 
    include "header.php";
?>
<h2>Histori Laundry</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Nama User</th><th>Nama Meber</th><th>Paket</th><th>qty</th><th>subtotal</th><th>Tanggal laundry</th><th>Tanggal selesai</th><th>tanggal bayar</th><th>Status</th><th>Pembayaran</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi  join member on transaksi.id_member = member.id_member join user on transaksi.id_user = user.id_user order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $paket="<ol>";
            $subtotal="<ol>";
            $qty="<ol>";
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");
            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $paket.=$dt_paket['jenis']."<br>";
                $subtotal.=$dt_paket['subtotal']."<br>";
                $qty.=$dt_paket['qty']."<br>";
            }
            $paket.="</ol>";
            $subtotal.="</ol>";
            $qty.="</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_cek_bayar=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$dt_histori['id_transaksi']."'");
            if(mysqli_num_rows($qry_cek_bayar)>0){
                $dt_bayar=mysqli_fetch_array($qry_cek_bayar);
                // $denda="denda Rp. ".$dt_kembali['denda'];
                $status_proses="<label class='alert alert-success'>".$dt_histori['status']."</label>";
                $status_bayar="<label class='alert alert-danger'>".$dt_histori['dibayar']."</label>";
                $button_update="<a href='update.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"apakah anda yakin?\")'>update</a>";
            } else {
                // $status_proses="<label class='alert alert-success'>".$dt_histori['status']."</label>";
                // $status_bayar="<label class='alert alert-danger'>Belum dibayar</label>";
                // $button_update="<a href='update.php?id=".$dt_histori['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"apakah anda yakin?\")'>update</a>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['nama_user']?></td><td><?=$dt_histori['nama_member']?></td><td><?=$paket?></td><td><?=$qty?></td><td><?=$subtotal?></td><td><?=$dt_histori['tgl']?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$dt_histori['tgl_bayar']?></td><td><?=$status_proses?></td><td><?=$status_bayar?></td><td><?=$button_update?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
