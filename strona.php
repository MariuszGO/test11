<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<img src="obraz11.png" alt="Opis obrazka">
<?php
$polaczenie= mysqli_connect('localhost','root','','rzeki'); //poł
$zaopytanie= "SELECT * FROM wodowskazy"; //zapytanie

$wynik= mysqli_query($polaczenie,$zaopytanie);  //wykonanie zapytania

while($rzeka= mysqli_fetch_array($wynik)){ //pętla wyświetlająca wyniki zapytania
    echo "<h2>".$rzeka[1]."</h2>";
    echo "<h2>".$rzeka['nazwa']."</h2>";
    echo "<hr>";
}

mysqli_close($polaczenie); //zamknięcie połączenia

?>




</body>
</html>