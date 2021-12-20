<?php
session_start();

    if(isset($_POST['salir'])) { 
        session_destroy();
        header('Location: ../index.php');
        exit(); 
    }
    else if(isset($_POST['salirUser']))  {
        session_destroy();
        header('Location: ../index.php');
        exit(); 
    }
?>