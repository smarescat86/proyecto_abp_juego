<?php
    require_once('../data/bd.php');
    $idUsuario = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloJuego.css">
    <link rel="stylesheet" href="../css/estiloIndex.css">
    <link rel="stylesheet" href="../css/estiloChooseCup.css">
    <link rel="stylesheet" href="../css/estiloChooseBackground.css">
    <link rel="stylesheet" href="../css/estiloChooseModul.css">
    <link rel="stylesheet" href="../css/estiloQuestion.css">
    <link rel="stylesheet" href="../css/estiloScore.css">
    <link rel="stylesheet" href="../css/estiloInformation.css">
    <link rel="stylesheet" href="../css/estiloIntro.css">
    <link rel="stylesheet" href="../css/estiloStatistic.css">
    <?php
        include('../data/bootstrap.php')
    ?>
    <title>Trile</title>
</head>
<body>
    <!--Intro-->
    <?php
        include('intro.php')

    ?>


    <!--INDEX-->
    <div class="divBackgound space" id="backgroundIndex"></div>

    <div class="title index"></div>

    <div class="buttons index" id="play"></div>

    <div class="buttons index" id="cupButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Escogeix el color"></div>

    <div class="buttons index" id="backgroundButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Escogeix el fons"></div>

    <div class="buttons index" id="informationButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Informació"></div>

    <div class="buttons index sound on" id="soundButton"></div>

    <!--<div class="buttons index" id="instruccionsButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Instruccions"></div>-->

    <div class="buttons index" id="statisticButton" data-bs-toggle="tooltip" data-bs-placement="top" title="Estadísticas"></div>
    <!--CUP-->
    <?php
        include('chooseCup.php')
    ?>
    
    <!--BACKGROUND-->
    <?php
        include('chooseBackground.php')
    ?>

    <!--MODUL -->
    <?php
        include('chooseModul.php')
    ?>

    <!--PLAY-->
    <?php
        include('game.php')
    ?>

    <!--Question-->
    <?php
        include('question.php')
    ?>
    <!--SCORE-->
    <?php
        include('score.php')
    ?>
    <!--INFORMATION-->
    <?php
        include('information.php')
    ?>

    <!--Statistic-->
    <?php
        include('statistic.php')
    ?>

    
    <script src="../js/index.js"></script>
    <script src="../js/chooseCup.js"></script>
    <script src="../js/chooseBackground.js"></script>
    <script src="../js/javaScript.js"></script>
    <script src="../js/chooseModul.js"></script>
    <script src="../js/question.js"></script>
    <script src="../js/score.js"></script>
    <script src="../js/information.js"></script>
    <script src="../js/intro.js"></script>
    <script src="../js/statistic.js"></script>

</body>
</html>


