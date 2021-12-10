<?php
include '../bootstrap/index.php';
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Registrarse</h2>
                </div>
                <div class="card-body">
                    <form action="../controllers/loginController.php" method="POST" id="form-register">
                        <div class="mb-4">
                            <label for="email">Nombre</label>
                            <input type="text" class="form-control" id="email" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="mb-4">
                            <label for="email">Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos">
                        </div>
                        <div class="mb-4">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <label for="email">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="registro" class="btn btn-dark">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>