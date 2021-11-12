<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../bootstrap/index.php';
    ?>

    <title>Document</title>
    
</head>
<script>

</script>
<body>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Login Form -->
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title">Cambiar Contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
         
                <div class="form-group">
                    <label for="Username">Nueva Contraseña</label>

                    <div class="input-group mb-3" id="show_hide_password">

                    <input class="form-control" type="password" id="myPassword2" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text"><i id="icon2" class="fa fa-eye-slash" onclick="mostrarContrasena2()" aria-hidden="true"></i></span>
                    </div>


                </div>
                <div class="form-group">
                    <label for="Username">Repite Contraseña</label>

                    <div class="input-group mb-3" id="show_hide_password">

                    <input class="form-control" type="password" id="myPassword3" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text"><i id="icon3" class="fa fa-eye-slash" onclick="mostrarContrasena3()" aria-hidden="true"></i></span>
                    </div>
                </div>
            </form>
            <div class="row rowPerfil inputs align-items-center text-center">
                <div class="col">
                    <button type="button" class="btn btn-outline-primary">Aceptar</button>
                </div>
                </div>
                <br>
                <div class="row rowPerfil inputs align-items-center text-center">
                  <div class="col">
                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"> Eliminar administrador</i></button>
                </div>
                
                
            </div>
        </div>
    </div>
    <script src="../js/mostrarContrsena.js"></script>
    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>

</body>

</html>