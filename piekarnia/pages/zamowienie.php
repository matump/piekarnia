<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamowienie</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../img/tlo.png" alt="tlo" width="1920" height="200">

    <a class="tablink" href="./pieczywo.php">Pieczywo</a>
    <a class="tablink" href="./cukiernictwo.php">Cukiernictwo</a>
    <a class="tablink" href="./produktyBezGlutenowe.php">Produkty bezglutenowe</a>
    <a class="tablink" href="./pieczywoBio.php">Pieczywo BIO</a>
    <a class="tablink" href="./sniadanie.php">Śniadanie</a>
    <a class="tablink" href="./koszyk.php">Koszyk</a>
<?php
    $name = $_POST['imie']; //wzięcie imienia podanego w formularzu z koszyka
    echo('<div>Dziekujemy za zrealizowanie zamowienia!<div>'); //wypisanie tekstu widocznego na stronie
    echo('<div>Czesc '.$name.'!</div>');
    echo('<div>Dostalismy twoje zamowienie, ktore teraz przygotowujemy, odbior zamowienia jest mozliwy w godzinach otwarcia sklepu!');
    echo('<div>Dziekujemy za skorzystanie z naszych uslug</div>');
    echo('<div>Wszystkiego dobrego zyczy zespol piekarni</div>');
    $_SESSION['koszyk'] = array(); //opróżnianie koszyka
?>
</body>
</html>

