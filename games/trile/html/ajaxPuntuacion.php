<?php

    session_start();

    saveStatisticBD($_SESSION['id'],$_GET['puntuation']);


    function openBd() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conexion = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$conexion->exec("set names utf-8");

        return $conexion;

    }  


    function selectTablaId($idUsuario) {

        $idTrile = 3;

        $conexion = openBd();

        $sentenciaText = "select * from usuario_juego where id_usuario = " . $idUsuario . " and id_juego = ". $idTrile .";";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        $conexion = closeBd();

        return $resultado;


    }

    function insertPuntuacion($idUsuario,$points) {

        $idTrile = 3;
        
        $conexion = openBd();

        //id_usuario id_juego puntuacion tiempo	

        $sentenciaText = "insert into usuario_juego values (:id_usuario,:id_juego,:point,90)";
        print_r($sentenciaText);

        $sentencia = $conexion->prepare($sentenciaText);

        $sentencia ->bindParam(":id_usuario",$idUsuario);
        $sentencia ->bindParam(":id_juego",$idTrile);
        $sentencia ->bindParam(":point",$points);

        $sentencia->execute();

        $conexion = closeBd();

        
    }

    function updatePuntuacion($idUsuario,$points) {

        $idTrile = 3;

        $conexion = openBd();

        $sentenciaText = "update usuario_juego set puntuacion = :point where id_usuario = :id_usuario and id_juego = :id_juego";

        $sentencia = $conexion->prepare($sentenciaText);

        $sentencia ->bindParam(":point",$points);
        $sentencia ->bindParam(":id_usuario",$idUsuario);
        $sentencia ->bindParam(":id_juego",$idTrile);
        

        $sentencia->execute();


        $conexion = closeBd();

    }

    function saveStatisticBD($idUsuario,$points) {     

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