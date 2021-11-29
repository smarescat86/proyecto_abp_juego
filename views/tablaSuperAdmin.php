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

                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fas fa-user-plus fa-1x text-white">Crear admin</i></button>

                <a class="nav-link d-flex" href="#">

                </a>
            </div>

            <div class="lineDiv juego"></div>

        </div>
        <div class="container">
            <!-- Modal -->
            <form action="" method="post">
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
                                    <label for="Username">Nombre</label>
                                    <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="Username">Apellidos</label>
                                    <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Apellidos">
                                </div>
                                <div class="mb-3">
                                    <label for="Username">Usuario<span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Usuario">
                                </div>

                                <div class="mb-3">
                                    <label for="Password">Password<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
                                </div>
                                <div class="mb-3">
                                    <label for="Username">Email<span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce email">
                                </div>

                            </div>
                            <div class="modal-footer pt-4">
                                <button type="button" class="btn btn-success mx-auto w-100">Registrar</button>
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
                            <tr class="table-hover">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td> <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#myModal2"> <i class="bi bi-pencil-square"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <form action="" method="post">

            <div class="container">
                <!-- Modal -->
                <form action="" method="post">
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

                                            <input class="form-control" type="password" id="myPassword2" >
                                            <span class="glyphicon glyphicon-eye-close" id="icon2" onclick="mostrarContrasena2()" ></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="Username">Repite Contraseña</label>

                                            <div class="input-group mb-3" id="show_hide_password">

                                                <input class="form-control" type="password" id="myPassword" >
                                                <span class="glyphicon glyphicon-eye-close" id="icon1" onclick="mostrarContrasena()"></i></span>
                                            </div>
                                        </div>
                                    </div>
                             

                                </div>
                                <div class="modal-footer  align-items-center text-center pt-4">
                                  
                                        <button type="button" class="btn btn-outline-primary">Aceptar</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"> Eliminar administrador</i></button>
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