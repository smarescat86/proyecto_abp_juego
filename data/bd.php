<?php 

function openBd() {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec('set names utf8');
    
    return $connection;

}

function closeBd() {
    return null;
}

function selectUser($email) {
    $connection = openBd();

    $queryText = "SELECT * FROM usuario WHERE email=:email";

    $query = $connection->prepare($queryText);
    $query->bindParam(':email', $email);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $connection = closeBd();

    return $result[0];
}

function selectAdmin($email, $pass) {
    $connection = openBd();

    $queryText = "SELECT * FROM usuario WHERE email = ? AND contrasena = ?";

    $query = $connection->prepare($queryText);
    $query->execute([$email, $pass]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $connection = closeBd();

    return $result[0];
}

function insertUser($nombre, $apellido, $email, $usuario) {
    $connection = openBd();

    $queryText = "INSERT INTO usuario (id_rol, nombre, apellido, email, nombre_usuario) VALUES (3, :nombre, :apellido, :email, :usuario)";

    $query = $connection->prepare($queryText);

    $query->bindParam(':nombre', $nombre);
    $query->bindParam(':apellido', $apellido);
    $query->bindParam(':email', $email);
    $query->bindParam(':usuario', $usuario);

    $query->execute();

    $connection = closeBd();
}

?>