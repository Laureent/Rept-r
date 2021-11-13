<?php

    include('megjelenites.php');
    $departure = new Megjelenites();
    $arrival = new Megjelenites();
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
                <nav>
                   <div class="row">
                        <div class="col-md-6 col-xs-12" id="bel1">
                            
                            <input class="btn" type="button" onmouseover="playMusic1()" value="Távozik">
                        </div>
                        <div class="col-md-6 col-xs-12" id="bel1">
                            
                            <input class="btn" type="button" onmouseover="playMusic2()" value="Érkező ">
                        </div>
                   </div>
                </nav>
            </div>
            <div class="col-4" id="p2">
            </div>
        </div>
    </header>
    <div class="container" id="main">
        <div class="row">
            
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla architecto illo harum distinctio dicta, non veniam, deserunt cupiditate culpa reiciendis at libero iusto et nihil atque quibusdam ut ipsa error.</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla architecto illo harum distinctio dicta, non veniam, deserunt cupiditate culpa reiciendis at libero iusto et nihil atque quibusdam ut ipsa error.</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla architecto illo harum distinctio dicta, non veniam, deserunt cupiditate culpa reiciendis at libero iusto et nihil atque quibusdam ut ipsa error.</p>
            </div>
        </div>
    </div>
</body>
</html>