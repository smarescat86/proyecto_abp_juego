<?php

session_start();

guardarPuntos(1,$_GET['puntos']);

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

function insertPuntos($puntos, $tiempo, $idUsuario){
    $conexion = openBd();

    $sentenciaText = "insert into usuario_juego (id_usuario, id_juego, puntuacion, tiempo) values (:idUsuario, :idJuego, :puntuacion, :tiempo)";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia ->bindParam(":idUsuario", $idUsuario);
    $sentencia ->bindParam(":idJuego", 2);
    $sentencia ->bindParam(":puntuacion", $puntos);
    $sentencia ->bindParam(":tiempo", $tiempo);
    $sentencia ->execute();

    closeBd();
}

function updatePuntos($puntos) {

    $idDynaman = 2;
    $idUsuario = 1;

    $conexion = openBd();

    $sentenciaText = "update usuario_juego set puntuacion = :puntos where id_usuario = :id_usuario and id_juego = :id_juego";

    $sentencia = $conexion->prepare($sentenciaText);

    $sentencia ->bindParam(":puntos",$puntos);
    $sentencia ->bindParam(":id_usuario",$idUsuario);
    $sentencia ->bindParam(":id_juego",$idDynaman);
    
    $sentencia->execute();

    $conexion = closeBd();
}

function selectTablaId($idUsuario) {
    $idDynaman = 2;

    $conexion = openBd();

    $sentenciaText = "select * from usuario_juego where id_usuario = " . $idUsuario . " and id_juego = ". $idTrile .";";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    $conexion = closeBd();

    return $resultado;
}


function guardarPuntos($idUsuario,$points) {     

    $datosTablaPuntuacion = selectTablaId($idUsuario);

    if(count($datosTablaPuntuacion) == 0) {
        //INSERT
        insertPuntuacion($idUsuario,$points);

    }
    else {
        //UPDATE
        $puntacionSuperior = false;

        foreach($datosTablaPuntuacion as $datoTablaPuntuacion) {
            if($datoTablaPuntuacion['puntuacion'] < $points) {
                $puntacionSuperior = true;
            }
        }
        
        if($puntacionSuperior) {
            updatePuntuacion($idUsuario,$points);
        }

        $puntacionSuperior = false;
        
    }


}


function closeBd() {
    return null;
}

?>

