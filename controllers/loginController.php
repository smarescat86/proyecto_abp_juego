<?php 

include ('../data/bd.php');
session_start();

print_r($_POST['login-user']);

if(isset($_POST['login-user'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    
    if(!empty($email)) {
        $user = selectUser($email);
        if(!empty($user)) {
            $_SESSION['user'] = $user;
            header('Location: ../views/games.php');
            exit;
        } else {
            unset($_SESSION['user']);
            header('Location: ../views/register.php');
            exit;
        }

    } else {
        unset($_SESSION['user']);
        print_r('Error en la autentifacion');
        header('Location: ../views/login_user.php');
        exit;
    }
} else if (isset($_POST['login-admin'])) {
    $emailAdmin = isset($_POST['email-admin']) ? $_POST['email-admin'] : '';
    $passAdmin = isset($_POST['pass-admin']) ? $_POST['pass-admin'] : '';
    if(!empty($admin)) {
        $admin = selectAdmin($emailAdmin, $passAdmin);
        if(!empty($admin)){
            $_SESSION['admin'] = $admin;
        }
    }
}


?>