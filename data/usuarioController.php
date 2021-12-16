

<?php

    $idUsuario = 1;

    require_once("bd.php");
    session_start();

    if(isset($_POST['update'])) {

        //updateUsuarioId($nombre,$apellido,$email,$password)
        
        $usuario = selectUsuarioId($idUsuario);

        $usuarios = selectUsuario();
        
        $nombre = "";
        $apellido = "";
        $email = "";
        $nickname = "";
        $correcto = true;
        $mensajeError = " ";


        //Nombre

        if($_POST['nombre'] == "") {
            $nombre = $usuario[0]['nombre'];

        }
        else {
            $nombre = $_POST['nombre'];
        }


        //Apellido

        if($_POST['apellido'] == "") {
            $apellido = $usuario[0]['apellido'];

        }
        else {
            $apellido = $_POST['apellido'];
        }


        //Email

        foreach($usuarios as $usuarioEmail) {
            if($_POST['email'] == $usuarioEmail['email'] && $_POST['email'] != $usuario[0]['email']) {
                $correcto = false;
            }
        }

        if(!$correcto) {
            $mensajeError = $mensajeError . "Email ya existente! " . '\n';;
        }

        if($_POST['email'] == "") {
            $email = $usuario[0]['email'];

        }
        else {
            $email = $_POST['email'];
        }




        //Nickname

        $correctoNickname = true;

        foreach($usuarios as $usuarioEmail) {
            if($_POST['nickname'] == $usuarioEmail['nombre_usuario'] && $_POST['nickname'] != $usuario[0]['nombre_usuario']) {
                $correcto = false;
                $correctoNickname = false;
            }
        }

        if(!$correctoNickname) {
            $mensajeError = $mensajeError . "Nickname ya existente! " . '\n';;
        }
        
        if($_POST['nickname'] == "") {
            $nickname = $usuario[0]['nombre_usuario'];

        }
        else {
            $nickname = $_POST['nickname'];
        }

        //PASSWORD NUEVA

        $passwordNueva = "";

        if($_POST['passwordNew'] == "") {
            $passwordNueva = $usuario[0]['contrasena'];

        }
        else {
            $passwordNueva = md5($_POST['passwordNew']);
        }

        //PASSWORD ACTUAL

       

        $passwordActualEncriptada = $usuario[0]['contrasena'];
        $passwordActual = $_POST['passwordActual'];
        
        //$_SESSION['passwordActualEncriptada'] = $passwordActualEncriptada;
        
        print_r($passwordActualEncriptada . "<br>");
        print_r(md5($passwordActual));


        if(md5($passwordActual) != $passwordActualEncriptada) {
            
            $mensajeError = $mensajeError . "Contraseña incorrecta!" . '\n';

            //print_r($nombre." ". $apellido." ". $email." ". $passwordNueva." ". $nickname);

            $correcto = false;
        }


        $_SESSION['updateCorrect'] = false;
        $_SESSION['correcto'] = true;

        
        if($correcto) {
            
            //$idUsuario,$nombre,$apellido,$email,$password,$nickname
            print_r($nombre." ". $apellido." ". $email." ". $passwordNueva." ". $nickname);

            updateUsuarioId($idUsuario,$nombre,$apellido,$email,$passwordNueva,$nickname);

            $_SESSION['updateCorrect'] = true;

            header('Location: ../views/administracionPerfil.php');
            exit();
            

        }

        else {

            $correcto = true;
            
            $_SESSION['correcto'] = false;
            $_SESSION['mensaje'] = $mensajeError;
            

            header('Location: ../views/administracionPerfil.php');

            exit();

            /*
            print_r($passwordActualEncriptada);
            print_r($passwordActual);
            */

            


            //exit();
            

            

            /*
            echo "<script>";
            echo "alert('hola');";
            echo "window.location.assign('../views/administracionPerfil.php');";
            echo "</script>";
            
            */

            
            
        }
        
        

    }

?>