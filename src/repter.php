<?php

    /*
     * megjelenites.php meghivása
     *
     * $flights változó -> osztály példányosítása a metódusok meghívásához
     */

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
            </div>
           <div class="col-4" id="nav"> 
                    <form method="post">
                        <input class="btn" type="submit" onmouseover="playMusic1()" name="indulo" value="Induló">
                        <input class="btn" type="submit" onmouseover="playMusic2()" name="erkezo" value="Érkező">
                    </form>
            </div>
            <div class="col-4" id="p2">
            </div>
        </div>
    </header>
    <main>
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
        </div>
    </main>

</body>
</html>