<?php
  //session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Dynaman!</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="shortcut icon" href="media/dinamita.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>

  <?php
    //include 'php/bd.php';
  ?>

    <!--<div class="guy" id="guy"></div>-->
    <div class="container">
        <div class="stats">
            <div class="logo-entero"></div>
            <div id="timerBarra" class="timerBarra"></div>

            <div id="timer" class="timer"></div>

            <div class="tiempo">Tiempo</div>
            
            <div class="informatica"></div>
            <div class="informatica-texto">Inform</div>
            <div id="informatica-check" class="informatica-check"></div>


            <div class="marketing"></div>
            <div class="marketing-texto">Mktg</div>
            <div id="marketing-check" class="marketing-check"></div>
            
            <div class="turismo"></div>
            <div class="turismo-texto">Turismo</div>
            <div id="turismo-check" class="turismo-check"></div>
            
            <div class="administracion"></div>
            <div class="administracion-texto">Admón</div>
            <div id="administracion-check" class="administracion-check"></div>

            <button onclick="sonarMusica()">
                <img class="musica" src="media/volumen.png" alt="">
            </button>
            

            <div class="salir"><a href="../../index.php">Salir</a></div>

        </div>
        
        <div id="game">
        </div>
        
        <div id="game2">

        </div>
    </div>
    
    <script src="scripts/scripts.js"></script>
</body>
</html>


<!--https://programmerclick.com/article/6943563351/-->

<!--https://github.com/cscov/bomberman-lite/blob/master/src/player.js-->