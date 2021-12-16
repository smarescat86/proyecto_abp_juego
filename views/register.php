<?php
include '../bootstrap/index.php';
?>

<link rel="stylesheet" href="./../styles/logins.css">

<div class="vh-100" style="background-image: url('../media/centre.jpeg'); background-image: url(../media/centre.jpeg);background-color: rgb(200, 200,200); background-blend-mode: soft-light;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-8 mt-5">
            <div class="card shadow">
                <div class="card-title text-center border-bottom text-orange">
                    <h2 class="p-3">Registrarse</h2>
                </div>
                <div class="card-body">
                    <form action="../php_controllers/loginController.php" method="POST" id="form-register">
                        <div class="mb-4">
                            <label for="email">Nombre</label>
                            <input type="text" class="form-control" id="email" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-4">
                            <label for="email">Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
                        </div>
                        <div class="mb-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <label for="email">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="registro" class="btn color-orange">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    if(isset($_SESSION["correctoRegister"])) {
        
        if(!$_SESSION["correctoRegister"]) {
            echo "<script>";
            echo "setTimeout(function(){ alert('Usuario duplicado!'); }, 200);";
            echo "</script>";
        }

        $_SESSION["correctoRegister"] = true;


    }

?>