<?php 
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if($data['action'] == 'selectPlayers') {
    selectPlayers();
}
if($data['action'] == 'updateUser') {
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
    $time = $data['seconds'];
    $score = $data['score'];

    updateUser($user, $time, $score);
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

    if(!empty($result)) {
        echo json_encode($result);
    } else {
        echo json_encode([]);
    }

    $connection = closeBd();
    return $result;
}

function updateUser($user, $time, $score) {
    $id = $user['id_usuario'];

    $connection = openBd();

    $queryText = "UPDATE usuario_juego SET puntuacion=:puntuacion, tiempo=:tiempo
                  WHERE id_usuario =:id AND id_juego = 1";

    $query = $connection->prepare($queryText);
    $query->bindParam(':puntuacion', $score);
    $query->bindParam(':tiempo', $time);
    $query->bindParam(':id', $id);
    $query->execute();

    $connection = closeBd();
}


?>