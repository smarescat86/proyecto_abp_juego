<?php
    session_start();

    include 'bd.php';

    $datos = json_decode(file_get_contents('php://input'),true);

    //$idUsuario = $user['id_usuario'];
    $idUsuario = 1;
    $puntos = $datos['puntos'];
    $tiempo = $datos['tiempo'];

    function insertPuntos($idUsuario, $puntos, $tiempo);
?> 