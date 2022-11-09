<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color:none;
            background-image:url(foto/fotobg4.jpg);
            background-size: 100%;
        }
        
        h2{
    font-size: 2.5rem;
    color:rgb(71, 65, 160);
    font-family: 'Trebuchet MS';
    font-weight: bold;
    text-transform: capitalize;
    /* text-shadow: 3px 2px 1px rgb(171, 109, 132); */
    background-color: none;
    text-align: center;
    padding:20px ;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    include "header.php";
    ?>
    <div class="judul">
    <h2 >Selamat datang <?=$_SESSION['role']?> <?=$_SESSION['nama_user']?> di Laundry Lovefy</h2>
    </div>
        
    
    
    <?php
        include "footer.php";
?>
</body>
</html>
