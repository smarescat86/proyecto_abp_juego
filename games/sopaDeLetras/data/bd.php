<?php 

$data = json_decode(file_get_contents('php://input'), true);

if($data['action'] == 'selectPlayers') {
    selectPlayers();
}

function openBd() {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = new PDO("mysql:host=$servername;dbname=proyecto_juego", $username, $password);
    //set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec('set names utf8');
    
    return $connection;

}

function closeBd() {
    return null;
}

function selectPlayers() {
    $connection = openBd();

    $queryText = "SELECT puntuacion, tiempo, usuario.id_usuario, usuario.nombre_usuario FROM usuario_juego
                  JOIN usuario
                  JOIN juego ON usuario_juego.id_usuario = usuario.id_usuario AND usuario_juego.id_juego = juego.id_juego
                  ORDER BY tiempo ASC LIMIT 3";

    $query = $connection->prepare($queryText);
    $query->execute();
    $result = $query->fetchAll();

    $connection = closeBd();

    if(!empty($result)) {
        echo json_encode($result);
    } else {
        echo json_encode([]);
    }

    $connection = closeBd();
    return $result;
}


?>