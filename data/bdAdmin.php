<?php

    function openBd() 
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conexion = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$conexion->exec("set names utf-8");

        return $conexion;
        

    }

    function selectUsuario() {
        $conexion = openBd();

        $sentenciaText = "select * from usuario";

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        $conexion = closeBd();
        
        return $resultado;
    }

    function selectUsuarioId($idUsuario) {
        $conexion = openBd();

        //SELECT * from usuario where id_usuario = 1;
        $sentenciaText = "select * from usuario where id_usuario = " . strval( $idUsuario );

        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        $conexion = closeBd();

        return $resultado;
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

    //Nuevo

    function selectUpdateAdmin($userId) {

        $connection = openBd();

        $queryText = "SELECT * FROM usuario WHERE id_usuario = ?";

        $query = $connection->prepare($queryText);
        $query->execute([$userId]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $connection = closeBd();

        return $result[0];

    }

    /*
    UPDATE usuario
SET nombre = 'Pablo', email= 'pablo@gmail.com'
WHERE id_usuario = 1;
    
    */

    function updateUsuarioId($idUsuario,$nombre,$apellido,$email,$password,$nickname) {
        $conexion = openBd();

        $sentenciaText = "update usuario set nombre = :nombre, apellido = :apellido, email = :email, contrasena = :password, nombre_usuario = :nickname ".
                            "where id_usuario = ". strval( $idUsuario );


        $sentencia = $conexion->prepare($sentenciaText);

        $sentencia ->bindParam(":nombre",$nombre);
        $sentencia ->bindParam(":apellido",$apellido);
        $sentencia ->bindParam(":email",$email);
        $sentencia ->bindParam(":password",$password);
        $sentencia ->bindParam(":nickname",$nickname);

        print_r($sentenciaText);

        //echo print_r($sentenciaText);

        $sentencia->execute();




        $conexion = closeBd();
    }

    //JUEGOS

    function selectTablaId($idTabla) {
        $conexion = openBd();

        $sentenciaText = "select * from usuario_juego where id_juego = " . strval( $idTabla);

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


    

    

    function closeBd() {
        return null;
    }

?>