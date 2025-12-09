<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pliki</title>
</head>
<body>
        <form>
            <label for="imie"> Podaj imie</label>
            <input type="text" name="imie" id="imie">
            <button>Zapisz</button>
        </form>
    
    <?php

    //w zapisuje do pliku niszcząc starą zawartość
    //a dopisuje do pliku
    //r odczytyuje z pliku

    echo @$_GET["imie"];


    $plik = fopen("dane.txt","a");
    if($plik == false){
        "Błąd";
    }

    fwrite($plik,@$_GET["imie"] . " ");
    fclose($plik);
    echo "test";

    $plik = fopen("dane.txt","r");
    $zmienna = fread($plik,filesize("dane.txt"));
    echo $zmienna;
    fclose($plik);

    ?>
    
</body>
</html>