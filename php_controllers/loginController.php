<?php 

include ('../data/bd.php');
session_start();

if(isset($_POST['login-user'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    
    if(!empty($email)) {
        $user = selectUser($email);
        if(!empty($user)) {
            $_SESSION['user'] = $user;
            header('Location: ../index.php');
            exit;
        } else {
            unset($_SESSION['user']);
            header('Location: ../views/register.php');
            exit;
        }

    } else {
        unset($_SESSION['user']);
        header('Location: ../views/login_user.php');
        exit;
    }
} else if (isset($_POST['login-admin'])) {
    $emailAdmin = isset($_POST['email-admin']) ? $_POST['email-admin'] : '';
    $passAdmin = isset($_POST['pass-admin']) ? $_POST['pass-admin'] : '';

    if(!empty($emailAdmin) && !empty($passAdmin)) {
        $admin = selectAdmin($emailAdmin, $passAdmin);
        if(!empty($admin)){
            $_SESSION['admin'] = $admin;
            header('Location: ../views/tablaSuperAdmin.php');
            exit;
        } else {
            unset($_SESSION['admin']);
            header('Location: ../views/login_admin.php');
            exit;
        }
    }else {
        unset($_SESSION['admin']);
        header('Location: ../views/login_admin.php');
        exit;
    }
} else if(isset($_POST['registro'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';

    if(!empty($nombre) && !empty($apellido) &&!empty($email) &&!empty($usuario)) {
        insertUser($nombre, $apellido, $email, $usuario);
        header('Location: ../views/index.php');
        exit;
    }
}

?>