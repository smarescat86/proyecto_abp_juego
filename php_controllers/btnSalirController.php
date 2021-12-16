<?php
session_start();

if(isset($_POST['salir'])) { 
    session_destroy();
    header('Location: ../index.php');
    exit(); 
}  
?>