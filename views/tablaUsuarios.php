<?php
    require_once('../php_librarys/bd.php');

    $usuarios = selectUsuarios();

    $admin = [];

    if (isset($_SESSION)) {

        $admin = $_SESSION['admin'];
        var_dump($admin);

        $_SESSION['backLandingPage'] = true;
        
    }


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

</head>

<body>

    <?php
    include('dashboard.php');
    ?>

    <div class="colJuego col col-8 col-md-9 col-lg-10">
        <div class="row rowJuego title align-items-start">
            <div class="col">
                <h1 class="p-4">Administración - Usuarios</h1>

                <div class="lineDiv juego"></div>
            </div>

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
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nickname</th>
                                <th scope="col">Rol</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($usuarios as $usuario) { ?>
                                <tr class="table-hover">
                                <th scope="row"><?php echo $usuario['id_usuario']?></th>
                                <td><?php echo $usuario['nombre'] ?></td>
                                <td><?php echo $usuario['apellido'] ?></td>
                                <td><?php echo $usuario['email'] ?></td>
                                <td><?php echo $usuario['nombre_usuario'] ?></td>
                                <td><?php echo $usuario['rol']?></td>
                               
                                </tr>
                                <?php } ?>
                               
                                    
                           
                           
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>
    </div>
    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>



</body>

</html>