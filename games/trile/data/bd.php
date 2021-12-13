<?php
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

    function selectTableTrile() {

        $idTrile = 3;
        
        $conexion = openBd();

        $sentenciaText = "select * from usuario_juego where id_juego = " . strval($idTrile);

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



    function closeBd() {
        return null;
    }


?>