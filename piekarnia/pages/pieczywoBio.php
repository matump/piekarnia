<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieczywo bio</title>
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
     
<div id="About" class="tabcontent">
    <h3>Pieczywo BIO</h3>

</div>
<div class="product">
        <form method="POST">
            <img src="../img/razowy.png" alt="bio" width="300" height="280">
            <br>
            Chleb Razowy z Miodem BIO 300g 3,99zl<input type="submit" name="pb1" value="Dodaj">
        </form>

    </div>
    <div class="product">
        <form method="POST">
        <img src="../img/zytni.png" alt="bio" width="300" height="280">
            <br>
            Chleb Żytni BIO 300g 5,49zl<input type="submit" name="pb2" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
        <img src="../img/gruboziarnisty.png" alt="bio" width="300" height="280">
            <br>
            Chleb Gruboziarnisty BIO 350 g 6,99zl<input type="submit" name="pb3" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
        <img src="../img/magnat.png" alt="bio" width="300" height="280">
            <br>
            Chleb Magnat BIO 300 g 5,99zl<input type="submit" name="pb4" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
        <img src="../img/sniadaniowy.png" alt="bio" width="300" height="280">
            <br>
            Chleb Śniadaniowy BIO 180 g 6,99zl<input type="submit" name="pb5" value="Dodaj">
        </form>
    </div>

    <?php
    if(!isset($_SESSION["koszyk"])){
        $_SESSION["koszyk"] = array();
    }
    if(isset($_POST["pb1"])){
        array_push($_SESSION["koszyk"], ["Chleb Razowy z Miodem BIO", 3.99]);
    }
    if(isset($_POST["pb2"])){
        array_push($_SESSION["koszyk"], ["Chleb Żytni BIO", 5.49]);
    }
    if(isset($_POST["pb3"])){
        array_push($_SESSION["koszyk"], ["Chleb Gruboziarnisty BIO", 6.99]);
    }
    if(isset($_POST["pb4"])){
        array_push($_SESSION["koszyk"], ["Chleb Magnat BIO", 5.99]);
    }
    if(isset($_POST["pb5"])){
        array_push($_SESSION["koszyk"], ["Chleb Śniadaniowy BIO", 6.99]);
    }
?>
</div>
</body>
</html>