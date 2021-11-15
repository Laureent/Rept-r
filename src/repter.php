<?php
    
    include('megjelenites.php');
    $flights = new Megjelenites();
    
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gyuri</title>
    <link rel="icon" href="img/airport.png" type="image/icon type">
</head>
<body><script src="airport.js"></script>
    
    <header class="container-fluid">
        <div  class="row">
            <div class="col-4" id="p1">
                <h1>Seoul (Incheon) reptér</h1>
            </div>
            <div class="col-4" id="nav">
                <nav>
                   <div class="row">
                        <form method="post">
                            <div class="col-md-6 col-xs-12" id="bel1">
                                <input class="btn" type="submit" onmouseover="playMusic1()" name="indulo" value="Induló">
                            </div>
                            <div class="col-md-6 col-xs-12" id="bel1">
                                <input class="btn" type="submit" onmouseover="playMusic2()" name="erkezo" value="Érkező">
                            </div>
                        </form>
                   </div>
                </nav>
            </div>
            <div class="col-4" id="p2">
            </div>
        </div>
    </header>
    <div class="container" id="main">
        <div class="row">
            <div class="col-12">
                <?php
                    if (array_key_exists("indulo",$_POST)){
                        $flights->induloKiir();
                    }elseif (array_key_exists("erkezo",$_POST)){
                        $flights->erkezoKiir();
                    }else{

                    }
                ?>
            </div>       
    </div>
</body>
</html>