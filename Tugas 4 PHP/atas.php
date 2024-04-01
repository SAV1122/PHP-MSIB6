<?php 

include_once 'webmenu.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="text-align:center; ">Shoes Sav</h1>
    <div class="atas">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php 
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                //echo "$key $value" <br>;
                echo "<a href='index.php?hal=$key'> $value</a> | ";
            }

        ?>
    </div>
</body>
</html>