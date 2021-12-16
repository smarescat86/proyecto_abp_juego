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
    $id =  $_POST['delete'];
  
    deleteAdmin($id);
    header('Location: ../views/tablaSuperAdmin.php'); 
    exit();
} elseif(isset($_POST['update'])) {
    if($_POST['password'] == $_POST['newPassword']) {
        $id =  $_POST['update'];
    updatePassword($_POST['password'],$_POST['newPassword'],$id);
    $_SESSION['ok'] = true;
    
    } else {
        $_SESSION['ok'] = false;
                
    }
    header('Location: ../views/tablaSuperAdmin.php' );
    exit();
}
?>