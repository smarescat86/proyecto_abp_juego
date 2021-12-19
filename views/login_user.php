<?php
include '../bootstrap/index.php';

session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

if (!empty($user)) 
{
    header("Location: ../index.php");
    exit();
}
?>
<script src="../js/loginUser.js"></script>
<link rel="stylesheet" href="./../styles/logins.css">

<div class="vh-100" style="background-image: url('../media/centre.jpeg'); background-image: url(../media/centre.jpeg);background-color: rgb(200, 200,200); background-blend-mode: soft-light; background-size:cover">
    <div class="container py-5 h-100" style="width: 70%">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-6">
                <div class="card" style="border-radius: 1rem; box-shadow: 0 4px 8px 0">
                    <form action="../php_controllers/loginController.php" method="POST" id="form-login">
                        <div class="card-title text-center text-orange">
                            <h2 class="p-3">Iniciar sesión</h2>
                        </div>
                        <div class="mb-2 m-4">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                            <div id="alert-user">
                                
                            </div>                     
                        <div class="d-grid">
                            <button type="submit" id="login-user" name="login-user" class="btn btn-lg btn-block m-4 color-orange">Confirmar</button>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="../views/register.php" style="margin-right: 20px">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>