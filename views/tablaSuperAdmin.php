<?php
require_once('../php_librarys/bd.php');

$usuarios = selectAdmins();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - Super admin</title>
    <?php
    include '../bootstrap/index.php';
    ?>
    <link rel="stylesheet" href="../styles/sass/administracion/dashboard/estiloDashboard.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include('dashboard.php');
    ?>

    <div class="colJuego col col-8 col-md-9 col-lg-10">
        <div class="row rowJuego title align-items-start">
            <div class="col">
                <h1 class="p-4">Administración - Super Admin</h1>
            </div>
            <div class="col d-flex flex-row-reverse ms-2 text-white" style="margin-top:2%;">

                <button type="button" class="btn  btn-dark btn-sm"><i class="fas fa-sign-out-alt fa-1x text-white">Salir</i></button> 
                &nbsp; 
                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fas fa-user-plus fa-1x text-white">Crear admin</i></button>

                <a class="nav-link d-flex" href="#">

                </a>
            </div>

            <div class="lineDiv juego"></div>

        </div>
        <div class="container">
            <!-- Modal -->
            <form action="../php_controllers/adminController.php" method="POST">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Añadir Administrador</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Introduce Nombre" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="Introduce Apellidos" name="apellidos" >
                                </div>
                                <div class="mb-3">
                                    <label for="Usuario">Usuario<span class="text-danger">*</span></label>
                                    <input type="text"  class="form-control" id="usuario" placeholder="Introduce Usuario" name="usuario">
                                </div>

                                <div class="mb-3">
                                    <label for="Password">Password<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="Email">Email<span class="text-danger">*</span></label>
                                    <input type="text"  class="form-control" id="email" placeholder="Introduce email" name="email">
                                </div>

                            </div>
                            <div class="modal-footer pt-4">
                                <button type="submit" class="btn btn-success mx-auto w-100" name="insert">Registrar</button>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div class="row rowJuego align-items-center">
            <div class="col p-5">
                <div class="numbers">
                    <div class="row">

                    </div>

                </div>


                <div class="divTablaJuegos">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">nombre_usuario</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($usuarios as $usuario) { ?>
                                <tr class="table-hover">
                                <td><?php echo $usuario['nombre'] ?></td>
                                <td><?php echo $usuario['apellido'] ?></td>
                                <td><?php echo $usuario['nombre_usuario'] ?></td>
                          
                                <td>
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <?php } ?>
                           
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

            <div class="container">
                <!-- Modal -->
                <form action="../php_controllers/adminController.php" method="POST">
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Cambiar Contraseña</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="Username">Nueva Contraseña</label>

                                        <div class="input-group mb-3" id="show_hide_password">

                                            <input class="form-control" type="password" id="myPassword2" name="password" >
                                            <span class="glyphicon glyphicon-eye-close" id="icon2" onclick="mostrarContrasena2()" ></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="Username">Repite Contraseña</label>

                                            <div class="input-group mb-3" id="show_hide_password">

                                                <input class="form-control" type="password" id="myPassword" name="newPassword">
                                                <span class="glyphicon glyphicon-eye-close" id="icon1" onclick="mostrarContrasena()"></i></span>
                                            </div>
                                        </div>
                                    </div>
                             

                                </div>
                                <div class="modal-footer  align-items-center text-center pt-4">
                                  
                                        <button type="submit" class="btn btn-outline-primary" name="update">Aceptar</button>
                                        <button type="submit" class="btn btn-outline-danger"name="delete"><i class="fas fa-trash-alt"> Eliminar administrador</i></button>
                                    </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>


    </div>
    </div>


    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
    <script src="../js/mostrarContrsena.js"></script>


</body>

</html>