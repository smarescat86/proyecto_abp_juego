<?php
if(!isset($_SESSION)){
    session_start();
   }

function openBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

        $conexion = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");

        return $conexion;

    
}

function closeBd() {
    return null;
}

function selectUsuarios() {
   
    $conexion = openBD();
    $sentenciaSQL = "select usuario.*,rol.nombre as rol from usuario left join rol on usuario.id_rol = rol.id_rol";
    $sentencia = $conexion->prepare($sentenciaSQL);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();

    return $resultado;
}

function insertAdmin($nombre,$apellido,$usuario,$password,$email) {
    $conexion = openBD();
    $sentenciaSQL = "INSERT INTO usuario values(null,2,:nombre,:apellido,:usuario,:password,:email)";
    $password = md5($password);
    $sentencia = $conexion->prepare($sentenciaSQL);
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':apellido',$apellido);
    $sentencia->bindParam(':usuario',$usuario);
    $sentencia->bindParam(':password',$password);
    $sentencia->bindParam(':email',$email);
    $sentencia->execute();
    $conexion = closeBd();

}

function deleteAdmin($id) {
 
    $conexion = openBD();
    $sentenciaSQL = "delete from usuario where id_usuario =" .strval($id)  ;
    $sentencia = $conexion->prepare($sentenciaSQL);
    $sentencia->execute();
    $conexion = closeBd();
    header('Location: ../views/tablaSuperAdmin.php'); 

}

function updatePassword($password,$repitePassword,$id ) {
    $conexion = openBD();

    if($password === $repitePassword) {
    $password = md5($password);
    
    $sentenciaSQL = "update usuario set contrasena=:password " . "where id_usuario = " . strval($id) ;
    $sentencia = $conexion->prepare($sentenciaSQL);
    $sentencia->bindParam(':password',$password);
    $sentencia->execute();
    } 
    $conexion = closeBd();
    $_SESSION['ok'] = "";
}
function selectAdmins() {
    $conexion = openBD();
    $sentenciaSQL = "select usuario.id_usuario as id_usuario,usuario.nombre,usuario.apellido,usuario.nombre_usuario from usuario left join rol on usuario.id_rol = rol.id_rol where rol.nombre='admin'";
    $sentencia = $conexion->prepare($sentenciaSQL);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    $conexion = closeBd();

    return $resultado;
}

?>