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
    <h3 align="center" style="font-weight:bold; color:rgb(71, 65, 160);padding:20px">History Laundry</h3>
<table class="table table-hover table-striped">
    <thead>
    <?php
     if ($_SESSION['role']=="owner"){
    ?>
        <th>NO</th><th>Nama User</th><th>Nama Meber</th><th>Paket</th><th>qty</th><th>subtotal</th><th>Tanggal laundry</th><th>Tanggal selesai</th><th>tanggal bayar</th><th>Status</th><th>Pembayaran</th>
    <?php
     }else{
    ?>
            <th>NO</th><th>Nama User</th><th>Nama Meber</th><th>Paket</th><th>qty</th><th>subtotal</th><th>Tanggal laundry</th><th>Tanggal selesai</th><th>tanggal bayar</th><th>Status</th><th>Pembayaran</th><th>Aksi</th>
    <?php
     }
    ?>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select * from transaksi  join member on transaksi.id_member = member.id_member join user on transaksi.id_user = user.id_user order by id_transaksi desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
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
            //menampilkan status dan pembayaran
            // $qry_cek_bayar=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$dt_histori['id_transaksi']."'");
            // if(mysqli_num_rows($qry_cek_bayar)>0){
            //     $dt_bayar=mysqli_fetch_array($qry_cek_bayar);
            //     //if untuk status
            //     if($dt_histori['status'] == 'baru'){
            //         $status_proses="<label div class='alert alert-danger' >".$dt_histori['status']."</label>";
            //     } elseif($dt_histori['status'] == 'proses') {
            //         $status_proses="<label div class='alert alert-primary' >".$dt_histori['status']."</label>";
            //     }elseif($dt_histori['status'] == 'selesai') {
            //         $status_proses="<label div class='alert alert-warning' >".$dt_histori['status']."</label>";
            //     }elseif($dt_histori['status'] == 'diambil') {
            //         $status_proses="<label div class='alert alert-success' >".$dt_histori['status']."</label>";
            //     }
            //     //if untuk pembayaran
            //     if ($dt_histori['dibayar']=="belum_dibayar"){
            //     $status_bayar="<label class='alert alert-danger'>".$dt_histori['dibayar']."</label>";
            //     }
            //     else{
            //         $status_bayar="<label class='alert alert-success'>".$dt_histori['dibayar']."</label>";
            //     }
            //     $button_update="<a href='update.php?id_transaksi=".$dt_histori['id_transaksi']."' class='btn btn-warning'>Update</a>";
            
        
        ?>
            <tr>
                <?php
                if ($_SESSION['role']=="owner"){
                ?>
                <td><?=$no?></td><td><?=$dt_histori['nama_user']?></td><td><?=$dt_histori['nama_member']?></td><td><?=$paket?></td><td><?=$qty?></td><td><?=$subtotal?></td><td><?=$dt_histori['tgl']?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$dt_histori['tgl_bayar']?></td><td><?=$dt_histori['status']?></td><td><?=$dt_histori['dibayar']?></td>
                <?php
                }else{
                ?>
                <td><?=$no?></td>
                <td><?=$dt_histori['nama_user']?></td>
                <td><?=$dt_histori['nama_member']?></td>
                <td><?=$paket?></td>
                <td><?=$qty?></td>
                <td><?=$subtotal?></td>
                <td><?=$dt_histori['tgl']?></td>
                <td><?=$dt_histori['batas_waktu']?></td>
                <td><?=$dt_histori['tgl_bayar']?></td>
                <td><?=$dt_histori['status']?></td>
                <td><?=$dt_histori['dibayar']?></td>
                <td><?php
                    if ($dt_histori['dibayar'] == "belum_dibayar") {
                    ?>
                        <a href="ubah_status_pembayaran.php?id_transaksi=<?= $dt_histori['id_transaksi'] ?> "><button class="btn btn-success btn-sm">Lunas</button></a> 
                    <?php
                    } 
                    ?>
                        

                    <?php
                    if ($dt_histori['status'] == "baru") {
                    ?>
                        <a href="ubah_status.php?id_transaksi=<?= $dt_histori['id_transaksi'] ?>&status=proses"><button class="btn btn-warning btn-sm">Diproses</button></a>
                    <?php
                    } elseif ($dt_histori['status'] == "proses") {
                    ?>
                        <a href="ubah_status.php?id_transaksi=<?= $dt_histori['id_transaksi'] ?>&status=selesai"><button class="btn btn-info btn-sm">Selesai</button></a>
                    <?php
                    } elseif ($dt_histori['status'] == "selesai") {
                    ?>
                        <a href="ubah_status.php?id_transaksi=<?= $dt_histori['id_transaksi'] ?>&status=diambil"><button class="btn btn-success btn-sm">Diambil</button></a>
                    <?php
                    } elseif ($dt_histori['status'] == "diambil") {
                    ?>

                    <?php
                    if($dt_histori['dibayar'] == "dibayar") {
                    ?>

                    <?php
                    }}
                    ?>

                    </td>
                </tr>
            </tr>
        <?php
        }
    }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
</body>
</html>