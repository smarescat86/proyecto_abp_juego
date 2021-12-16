<?php
require_once('../php_librarys/bd.php');
if(!isset($_SESSION)){
    session_start();
   }

if(isset($_POST['insert'])) {
    insertAdmin($_POST['nombre'],$_POST['apellidos'],$_POST['usuario'],$_POST['password'],$_POST['email']);
    header('Location: ../views/tablaSuperAdmin.php');
    exit();
} elseif(isset($_POST['delete'])) {
    deleteAdmin();
    header('Location: ../views/tablaSuperAdmin.php'); 
    exit();
} elseif(isset($_POST['update'])) {
    if($_POST['password'] == $_POST['newPassword']) {
    updatePassword($_POST['password'],$_POST['newPassword']);
    $_SESSION['ok'] = true;
    
    } else {
        $_SESSION['ok'] = false;
                
    }
    header('Location: ../views/tablaSuperAdmin.php' );
    exit();
}
?>