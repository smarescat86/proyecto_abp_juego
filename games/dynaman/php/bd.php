<?php

function openBd(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    return $conexion;
}


  function selectTableDynaman() {

    $idDynaman = 4;
    
    $conexion = openBd();

    $sentenciaText = "select * from usuario_juego where id_juego = " . strval($idDynaman);

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultados = $sentencia->fetchAll();

    $conexion = closeBd();

    foreach ($resultados as &$resultado) {
        $idUsuario = $resultado["id_usuario"];
        $nickname = selectNicknameId( $idUsuario);

        $resultado["id_usuario"] = $nickname[0]['nombre_usuario'];

        //print_r($resultado);

    }
    return $resultados;
}


function selectNicknameId($idUsuario) {
    //SELECT nombre_usuario from usuario where id_usuario = 1;

    $conexion = openBd();

    $sentenciaText = "select nombre_usuario from usuario where id_usuario = " . strval( $idUsuario);

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    

    $conexion = closeBd();

    return $resultado;
}

function insertPuntuacion($id_ciudad, $nombre){
    $conexion = openBd();

    $sentenciaText = "insert into ciudades (id_ciudad, nombre) values (:id_ciudad, :nombre)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia ->bindParam(":id_ciudad", $id_ciudad);
    $sentencia ->bindParam(":nombre", $inombre);
    $sentencia ->execute();

    closeBd();
}



function closeBd() {
    return null;
}

?>

