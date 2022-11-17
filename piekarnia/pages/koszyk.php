<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="Koszyk" class="tabcontent">
    <img src="../img/tlo.png" alt="tlo" width="1920" height="200">

    <a class="tablink" href="./pieczywo.php">Pieczywo</a>
    <a class="tablink" href="./cukiernictwo.php">Cukiernictwo</a>
    <a class="tablink" href="./produktyBezGlutenowe.php">Produkty bezglutenowe</a>
    <a class="tablink" href="./pieczywoBio.php">Pieczywo BIO</a>
    <a class="tablink" href="./sniadanie.php">Śniadanie</a>
    <a class="tablink" href="./koszyk.php">Koszyk</a>
        <h3>Koszyk</h3>
            <?php
                $suma = 0;
                foreach ($_SESSION['koszyk'] as list($v1, $v2)) {
                    echo(' <div> nazwa produktu: '.$v1.' cena: '.$v2.' zł</div>');
                    $suma += $v2;
                }
                echo ('<div> suma: '.$suma.' zł</div>');
            ?>
            <form action="zamowienie.php" method="post"> 
                <p>Imie:</p>
                <input name="imie"> Podaj swoje imię<br> 
                <input name="sbm" value="Zamow" type="submit">
            </form>
    </div>
</body>
</html>