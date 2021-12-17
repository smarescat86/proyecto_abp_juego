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

    $idDynaman = 2;
    
    $conexion = openBd();

    $sentenciaText = "select * from usuario_juego where id_juego = :idDynaman ORDER BY puntuacion desc, tiempo LIMIT 5";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia ->bindParam(":idDynaman", $idDynaman);

    $sentencia->execute();

    $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    $conexion = closeBd();

    return $resultados;
}


function selectNickNameId($idUsuario) {
    //SELECT nombre_usuario from usuario where id_usuario = 1;

    $conexion = openBd();

    $sentenciaText = "select nombre_usuario from usuario where id_usuario = " . strval( $idUsuario);

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    $conexion = closeBd();

    return $resultado[0]['nombre_usuario'];
}

function insertPuntos($idUsuario, $puntos, $tiempo){
    $conexion = openBd();

    $idDynaman = 2;

    $sentenciaText = "insert into usuario_juego (id_usuario, id_juego, puntuacion, tiempo) values (:idUsuario, :idJuego, :puntuacion, :tiempo)";
    
    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia ->bindParam(":idUsuario", $idUsuario);
    $sentencia ->bindParam(":idJuego", $idDynaman);
    $sentencia ->bindParam(":puntuacion", $puntos);
    $sentencia ->bindParam(":tiempo", $tiempo);

    $sentencia ->execute();

    closeBd();
    var_dump('Ha hecho la función');
}

function updatePuntos($idUsuario, $puntos, $tiempo) {

    $idDynaman = 2;

    $conexion = openBd();

    $sentenciaText = "update usuario_juego set puntuacion = :puntos, tiempo = :tiempo where id_usuario = :id_usuario and id_juego = :id_juego";

    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia ->bindParam(":puntos", $puntos);
    $sentencia ->bindParam(":tiempo", $tiempo);
    $sentencia ->bindParam(":id_usuario", $idUsuario);
    $sentencia ->bindParam(":id_juego", $idDynaman);
    
    $sentencia->execute();

    $conexion = closeBd();
}

function selectTablaId($idUsuario) {
    $idDynaman = 2;

    $conexion = openBd();

    $sentenciaText = "select * from usuario_juego where id_usuario = " . $idUsuario . " and id_juego = " . $idDynaman . ";";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBd();

    return $resultado;
}


function guardarPuntos($idUsuario, $puntos, $tiempo) {

    $datosTablaPuntuacion = selectTablaId($idUsuario);

    if(count($datosTablaPuntuacion) == 0) {
        //INSERT
        insertPuntos($idUsuario, $puntos, $tiempo);
    }
    else {
        //UPDATE
        $puntacionSuperior = false;

        if($datosTablaPuntuacion['puntos'] < $puntos) {
            $puntacionSuperior = true;
        }
        elseif($datosTablaPuntuacion['puntos'] == $puntos){
            if($datosTablaPuntuacion['tiempo'] > $tiempo){
                $puntacionSuperior = true;
            }
        }
        
        if($puntacionSuperior) {
            updatePuntos($idUsuario, $puntos, $tiempo);
        }
        $puntacionSuperior = false;
    }


}


function closeBd() {
    return null;
}

?>

