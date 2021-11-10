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
      <!-- Icons font CSS-->
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

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
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-hover">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td></td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@mdo</td>
                                <td></td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="table-hover">
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>
                                    <a class="nav-link fa-1x text-dark" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="nav-link fa-1x text-dark " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
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