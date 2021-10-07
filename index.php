<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        * {font-family: Verdana, Genava, Tahoma, sans-serif;}
        td{
            padding: 4px;
        }
    </style>
</head>
<body>
    <?php
    $baju = 17;
    $bawa = 50;
    $hasil = $bawa;
    $harga = 0;
    $kira = 0;
    while ($hasil >= $baju){
        $hasil = $hasil - $baju;
        $kira = $kira + 1;

    }
    ?>
    <p>
        <?php echo $kira; ?> helai dibeli dan baki adalah RM<?php echo $hasil; ?>.
    </p>
</body>
</html>