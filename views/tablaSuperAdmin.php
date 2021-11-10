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
        include('navBar.php')
    ?>
    <?php
      include('dashboard.php');
    ?>

<div class="colJuego col col-8 col-md-9 col-lg-10">
        <div class="row rowJuego title align-items-start">
            <div class="col">
                <h1 class="p-4">Administración - Super Admin</h1>

                <div class="lineDiv juego"></div>
            </div>
            <div class="col d-flex flex-row-reverse" style="margin-left:-5%;">
                <a class="nav-link d-flex" href="#">
                    <i class="fas fa-sign-out-alt fa-1x text-dark">Salir</i>
                </a>
                <a class="nav-link d-flex" href="#">
                    <i class="fas fa-user-plus fa-1x text-dark">Crear admin</i>
                </a>
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
                            <th scope="col">Nickname</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Tiempo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-hover">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                            <tr class="table-hover">
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
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


