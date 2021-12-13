<?php
include '../bootstrap/index.php';
session_start();
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';

if (!empty($admin)) 
{
    header("Location: games.php");
}
?>
<script src="../js/loginAdmin.js"></script>

<div class="vh-100" style="background-image: url('../media/centro.jpeg') ; background-color: rgb(200, 200,200); background-blend-mode: soft-light;">
<div class="container">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Administración</h2>
                </div>
                <div class="card-body">
                    <form action="../php_controllers/loginController.php" method="POST" id="form-admin">
                        <div class="mb-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email-admin" name="email-admin" placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <label>Contraseña</label>
                            <div class="input-group">
                                <input type="Password" id="pass-admin" name="pass-admin"class="form-control" placeholder="Password" >
                                <div class="input-group-append">
                                    <button id="show_password" class="btn btn-dark" type="button" style="height: 100%; margin-left: 3px" onclick="mostrarPassword()">
                                        <span class="fa fa-eye-slash icon"></span> </button>
                                </div>
                            </div>  
                        </div>
                            <div id="alert-admin"></div>
                        <div class="mb-4">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember">Recordarme</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" id="login-admin" name="login-admin" class="btn btn-dark">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
    function mostrarPassword() {
        let txtPassword = document.getElementById("txtPassword");
        if (txtPassword.type == "password") {
            txtPassword.type = "text";
            //Cambio el icono
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            txtPassword.type = "password";
            //Cambio el icono
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }

</script>