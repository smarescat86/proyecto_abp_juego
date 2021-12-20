<?php
include '../bootstrap/index.php';
session_start();
//$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';

if (isset($_SESSION)) {

    $backLandingPage = $_SESSION['backLandingPage'];

    //var_dump($backLandingPage);

    if($backLandingPage) {
        header("Location: ../index.php");
        exit();
    }
    else {

        $admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';

        if(!empty($admin)) {
            
            if($admin['id_rol'] == 1) { //Si es super admin
                header('Location: ../views/tablaSuperAdmin.php');
                exit();
            } else {
                header('Location: ../views/tablaUsuarios.php');
                exit();
            }


        }
    }

}

/*
if (!empty($admin)) 
{
    header("Location: ../index.php");
    exit();
}
*/

?>
<script src="../js/loginAdmin.js"></script>
<link rel="stylesheet" href="./../styles/logins.css">

<div class="vh-100" style="background-image: url('../media/centro.jpeg') ; background-color: rgb(200, 200,200); background-blend-mode: soft-light; background-size:cover">
<div class="container">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-title text-center border-bottom text-orange">
                    <h2 class="p-3">Administración</h2>
                </div>
                <div class="card-body">
                    <form action="../php_controllers/loginController.php" method="POST" id="form-admin">
                        <div class="mb-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email-admin" name="email-admin" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <label>Contraseña</label>
                            <div class="input-group">
                                <input type="Password" id="pass-admin" name="pass-admin"class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    
                                </div>
                            </div>  
                        </div>
                            <div id="alert-admin"></div>
                      
                        <div class="d-grid">
                            <button type="submit" id="login-admin" name="login-admin" class="btn color-orange">Confirmar</button>
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