<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "header.php";

    include "koneksi.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <h3 align="center" style="padding:10px 0px 10px">UBAH PAKET</h3>
    <form action="proses_ubah_paket.php" method="post" style="padding:5px 20px" >
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        jenis : 
        <?php 
        $arr_paket=array('kiloan'=>'kiloan','selimut'=>'selimut','bed_cover'=>'bed cover','kaos'=>'kaos');
        ?>
        <select name="jenis" class="form-control">
            <option></option>
            <?php foreach ($arr_paket as $key_paket => $val_paket):
                if($key_paket==$dt_paket['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_paket?>" <?=$selek?>><?=$val_paket?></option>
            <?php endforeach ?>
        </select>
        Harga :
  <input type="text" name="harga" value= "<?=$dt_paket['harga']?>" class="form-control"><br>
        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

