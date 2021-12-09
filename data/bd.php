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
    $result = $query->fetchAll();

    $connection = closeBd();

    return $result[0];
}

function selectAdmin($email, $password) {
    $connection = openBd();

    $queryText = "SELECT * FROM usuario WHERE email=:email AND contrasena = :password";

    $query = $connection->prepare($queryText);
    $query->bindParam(':email', $email);
    $query->bindParam(':email', md5($password));
    $query->execute();
    $result = $query->fetchAll();

    $connection = closeBd();

    return $result[0];
}
?>