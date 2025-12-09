<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pliki</title>
</head>
<body>
    <?php

    $plik = fopen("dane.txt","a");

    fwrite($plik,"cos \n");
    fclose($plik);
    echo "test";

    $plik = fopen("dane.txt","r");
    $zmienna = fread($plik,filesize("dane.txt"));
    echo $zmienna;
    fclose($plik);

    ?>
    
</body>
</html>