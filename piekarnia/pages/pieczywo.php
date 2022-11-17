<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieczywo</title>
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
    <h3>Pieczywo</h3>
    <div class="product">
        <form method="POST"> 
            <img src="../img/sucharki.png" alt="produkt" width="300" height="280">
            <br>
            Sucharki 150g 7,99zl<input type="submit" name="p1" value="Dodaj">
        </form>

    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/kajzerka.png" alt="produkt" width="300" height="280">
            <br>
            Kajzerka 55g 0,99zl<input type="submit" name="p2" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/grahamka.png" alt="produkt" width="300" height="280">
            <br>
            Grahamka 0,99zl<input type="submit" name="p3" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/bulkaowies.png" alt="produkt" width="300" height="280">
            <br>
            Bułka owsiana 1,99zl<input type="submit" name="p4" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/chlebwieloziarnisty.png" alt="produkt" width="300" height="280">
            <br>
            Chleb wieloziarnisty 2,99zl<input type="submit" name="p5" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/bagietka.png" alt="produkt" width="300" height="280">
            <br>
            Bagietka 2,99zl<input type="submit" name="p6" value="Dodaj">
        </form>
    </div>
    
    <br>
   
    <p>Polecamy też:</p>
    
    
    <div class="container">
        <div class="product">
            <form method="POST">
                <img src="../img/groszek.png" alt="produkt" width="300" height="280">
                <br>
                Groszek ptysiowy 200g - 4,99zł<input type="submit" name="p7" value="Dodaj">
            </form>
        </div>
        <div class="product">
            <form method="POST">
                <img src="../img/Grzanki.png" alt="produkt" width="300" height="300">
                <br>
                Grzanki 100g - 3,99zł<input type="submit" name="p8" value="Dodaj">
            </form>
        </div>
        
      
    </div>


    <?php
    if(!isset($_SESSION["koszyk"])){
        $_SESSION["koszyk"] = array();
    }
    if(isset($_POST["p1"])){
        array_push($_SESSION["koszyk"], ["Sucharki 150g", 7.99]);
    }
    if(isset($_POST["p2"])){
        array_push($_SESSION["koszyk"], ["Kajzerka 55g ", 0.99]);
    }
    if(isset($_POST["p3"])){
        array_push($_SESSION["koszyk"], ["Grahamka", 0.99]);
    }
    if(isset($_POST["p4"])){
        array_push($_SESSION["koszyk"], ["Bułka owsiana", 1.99]);
    }
    if(isset($_POST["p5"])){
        array_push($_SESSION["koszyk"], ["Chleb wieloziarnisty", 2.99]);
    }
    if(isset($_POST["p6"])){
        array_push($_SESSION["koszyk"], ["Bagietka", 2.99]);
    }
    if(isset($_POST["p7"])){
        array_push($_SESSION["koszyk"], ["Groszek ptysiowy 200g", 4.99]);
    }
    if(isset($_POST["p8"])){
        array_push($_SESSION["koszyk"], ["Grzanki 100g", 3.99]);
    }
?>

</div>
</body>
</html>