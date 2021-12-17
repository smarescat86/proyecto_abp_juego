<?php
echo 'Hola mundo';

    session_start();

    $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

    $admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';

    $idUsuario = 0;

    if(!empty($user)){
        $idUsuario = $user['id_usuario'];
    }
    else{
        $idUsuario = $admin['id_usuario'];
    }

    include './bd.php';

    $datos = json_decode(file_get_contents('php://input'), true);
    //$idUsuario = 1;
    $puntos = $datos['puntos'];
    $tiempo = $datos['tiempo'];

    guardarPuntos ($idUsuario, $puntos, $tiempo);
?> 