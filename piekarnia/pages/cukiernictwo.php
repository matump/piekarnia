<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cukiernictwo</title>
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
    
<div id="Home" class="tabcontent">
    <h3>Cukiernictwo</h3>

    <div class="product">
        <form method="POST">
            <img src="../img/kremowka.png" width="300" height="280">
            <br>
            Kremówka 5,99zl<input type="submit" name="c1" value="Dodaj">
        </form>

    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/szarlotka.png" alt="produkt" width="300" height="280">
            <br>
            Szarlotka 7,99zl<input type="submit" name="c2" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/napoleonka.png" alt="produkt" width="300" height="280">
            <br>
            Napoleonka 6,99zl<input type="submit" name="c3" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/sernik.png" alt="produkt" width="300" height="280">
            <br>
            Sernik 8,99zl<input type="submit" name="c4" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/paczek.png" alt="produkt" width="300" height="280">
            <br>
            Pączek 2,49zl<input type="submit" name="c5" value="Dodaj">
        </form>
    </div>

    <br>
   
    <p>Polecamy też:</p>
    
    
    <div class="container">
        <div class="product">
            <form method="POST">
                <img src="../img/mini-paczki.png" alt="produkt" width="200" height="180">
                <br>
                Mini pączki - 4,99zł/100g<input type="submit" name="c6" value="Dodaj">
            </form>
        </div>
        <div class="product">
            <form method="POST">
                <img src="../img/ciastka.png" alt="produkt" width="200" height="180">
                <br>
                Ciastka 3,99zł/100g<input type="submit" name="c7" value="Dodaj">
            </form>
        </div>
        
      
    </div>

    <?php
    if(!isset($_SESSION["koszyk"])){
        $_SESSION["koszyk"] = array();
    }
    if(isset($_POST["c1"])){
        array_push($_SESSION["koszyk"], ["Kremówka", 5.99]);
    }
    if(isset($_POST["c2"])){
        array_push($_SESSION["koszyk"], ["Szarlotka", 7.99]);
    }
    if(isset($_POST["c3"])){
        array_push($_SESSION["koszyk"], ["Napoleonka", 6.99]);
    }
    if(isset($_POST["c4"])){
        array_push($_SESSION["koszyk"], ["Sernik", 8.99]);
    }
    if(isset($_POST["c5"])){
        array_push($_SESSION["koszyk"], ["Pączek", 2.49]);
    }
    if(isset($_POST["c6"])){
        array_push($_SESSION["koszyk"], ["Mini pączki", 4.99]);
    }
    if(isset($_POST["c7"])){
        array_push($_SESSION["koszyk"], ["Ciastka", 3.99]);
    }
    ?>

    </div>
</body>
</html>