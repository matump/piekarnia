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
    
<div id="Contact" class="tabcontent">
    <h3>Produkty bezglutenowe</h3>

<p>Polecamy też:</p>
<div class="container">
    <div class="product">
        <form method="POST">
            <img src="../img/bulka.png" alt="produkt" width="300" height="280">
            <br>
            Bułka szkolna 5,99zl<input type="submit" name="p1" value="Dodaj">
        </form>

    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/jagodzianka.png" alt="produkt" width="300" height="280">
            <br>
            Jagodzianka 5,99zl<input type="submit" name="p2" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/pizza.png" alt="produkt" width="300" height="280">
            <br>
            Mini Pizza 8,99zl<input type="submit" name="p3" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/muffin.png" alt="produkt" width="300" height="280">
            <br>
            Muffin z czekoladą 3,99zl<input type="submit" name="p4" value="Dodaj">
        </form>
    </div> 
    <div class="product">
        <form method="POST">
            <img src="../img/brownie.png" alt="produkt" width="300" height="280">
            <br>
            Brownie 6,99zl<input type="submit" name="p5" value="Dodaj">
        </form>
    </div>
    <div class="product">
        <form method="POST">
            <img src="../img/kokosanka.png" alt="produkt" width="300" height="280">
            <br>
            Kokosanki 8,99zl<input type="submit" name="p6" value="Dodaj">
        </form>
    </div>

    <br>
   
    <p>Polecamy też:</p>
    
    
    <div class="container">
        <div class="product">
            <form method="POST">
                <img src="../img/mini-paczki.png" alt="produkt" width="200" height="180">
                <br>
                Mini pączki - 4,99zł/100g<input type="submit" name="p7" value="Dodaj">
            </form>
        </div>
        <div class="product">
            <form method="POST">
                <img src="../img/ciastka.png" alt="produkt" width="200" height="180">
                <br>
                Ciastka 3,99zł/100g<input type="submit" name="p8" value="Dodaj">
            </form>
        </div>
        
      
    </div>

    <?php
    if(!isset($_SESSION["koszyk"])){
        $_SESSION["koszyk"] = array();
    }
    if(isset($_POST["p1"])){
        array_push($_SESSION["koszyk"], ["Bułka szkolna", 5.99]);
    }
    if(isset($_POST["p2"])){
        array_push($_SESSION["koszyk"], ["Jagodzianka", 5.99]);
    }
    if(isset($_POST["p3"])){
        array_push($_SESSION["koszyk"], ["Mini Pizza", 8.99]);
    }
    if(isset($_POST["p4"])){
        array_push($_SESSION["koszyk"], ["Muffin z czekoladą", 3.99]);
    }
    if(isset($_POST["p5"])){
        array_push($_SESSION["koszyk"], ["Brownie", 6.99]);
    }
    if(isset($_POST["p6"])){
        array_push($_SESSION["koszyk"], ["Kokosanki", 8.99]);
    }
    if(isset($_POST["p7"])){
        array_push($_SESSION["koszyk"], ["Mini pączki", 4.99]);
    }
    if(isset($_POST["p8"])){
        array_push($_SESSION["koszyk"], ["Ciastka", 3.99]);
    }
    ?> 
  </div>
</div>
</body>
</html>