<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Śniadanie</title>
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
    
    <div id="Sniadanie" class="tabcontent">
        <h3>Śniadanie</h3>
        <div class="product">
            <form method="post">
                <img src="../img/jogurtzowocami.jpg" alt="produkt" width="300" height="280">
                <br>
                <input type="submit" name="s1" value="Dodaj">Jogurt z Owocami 300 g 7,99zl
            </form>
        </div>
        <div class="product">
            <form method="post">
                <img src="../img/pannacotta.jpg" alt="produkt" width="300" height="280">
                <br>
                <input type="submit" name="s2" value="Dodaj">Panna Cotta z Musem Mango 180g 8,99zl
            </form>
        </div>
        <div class="product">
            <form method="post">
                <img src="../img/sokjesiennamoc.jpg" alt="produkt" width="300" height="280">
                <br>
                <input type="submit" name="s3" value="Dodaj">Sok Jesienna Moc 400 ml 10,99zl
            </form>
        </div>
        <div class="product">
            <form method="post">
                <img src="../img/sokodpornosc.jpg" alt="produkt" width="300" height="280">
                <br>
                <input type="submit" name="sniadanie" value="Dodaj">Sok odpornosc 10,99zl
            </form>
        </div>
        <div class="product">
            <form method="post">
                <img src="../img/ciabatka.jpg" alt="produkt" width="300" height="280">
                <br>
                <input type="submit" name="s4" value="Dodaj">Ciabatka z mozzarella 12,99zl
            </form>
        </div>
     <div class="product">
        <form method="post">
            <img src="../img/bulkaowsiana.jpg" alt="produkt" width="300" height="280">
            <br>
            <input type="submit" name="s5" value="Dodaj">Bułka Owsiana z Twarożkiem 12,99zl
        </form>
     </div>
    
     <?php
        if(!isset($_SESSION["koszyk"])){
            $_SESSION["koszyk"] = array();
        }
        if(isset($_POST["s1"])){
            array_push($_SESSION["koszyk"], ["Jogurt z Owocami 300 g 7,99zl", 7.99]);
        }
        if(isset($_POST["s2"])){
            array_push($_SESSION["koszyk"], ["Panna Cotta z Musem Mango 180g 8,99zl ", 8.99]);
        }
        if(isset($_POST["s3"])){
            array_push($_SESSION["koszyk"], ["Sok Jesienna Moc 400 ml 10,99zl", 10.99]);
        }
        if(isset($_POST["s4"])){
            array_push($_SESSION["koszyk"], ["Sok odpornosc 10,99zl", 10.99]);
        }
        if(isset($_POST["s5"])){
            array_push($_SESSION["koszyk"], ["Ciabatka z mozzarella 12,99zl", 12.99]);
        }
		if(isset($_POST["s6"])){
            array_push($_SESSION["koszyk"], ["Bułka Owsiana z Twarożkiem 12,99zl", 12.99]);
        }
    ?>
       
     </form>
</body>
</html>