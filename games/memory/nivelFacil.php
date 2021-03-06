<?php
require_once('./php_librarys/bd.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';


if(!empty($user)) {
    $_SESSION['idMemory'] = $user['id_usuario'];
} elseif(!empty($admin)) {
    $_SESSION['idMemory'] = $admin['id_usuario'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title></title>
    <link rel="stylesheet" href="./css/nivelFacil.css">

</head>
<script src="./js/memory/nivelFacil.js"></script>

<body onload='Ini()'>
    <div class="container " id="wrapper"><br>
        <div class="row border border-dark">
            <div class="col text-center" style="background-color:#eee;">
                <h2>
                    <p id='score'>Score:</p>
                </h2>
            </div>
            <div class="col text-center" style="background-color:#eee;">
                <h2>
                    <p id="compteEnrere"></p>

                </h2>

            </div>
        </div>
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Salidas Profesionales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="salidasProfessionales">

                    </div>
                    <div class="modal-footer">
                        
                    <a data-bs-toggle="modal" href="#staticBackdrop" class="btn btn-primary" data-dismiss="modal">Continuar</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="mostrarResultados">

                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-info" onclick="location.reload()">Tornar a jugar</button>
                        <a href="./clasificacion.php"><button type="button " class="btn btn-secondary">Mostrar Ranking</button>
                        <a href="./index.php"> <button type="button " class="btn btn-primary ">Continuar</button></a>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>