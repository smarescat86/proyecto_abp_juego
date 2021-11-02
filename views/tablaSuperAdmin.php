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
    <link rel="stylesheet" href="../styles/css/estiloDashboard.css">

</head>

<body>

    <?php
    include './navBarTablas.php';
    include './navBar.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="h2">Administración - Super Admin </p>
            </div>
            <div class="col">
                <div>
                    <a class="nav-link" href="#">
                        <i class="fas fa-user-plus fa-2x apartado">Crear admin</i>
                    </a>
                   

                </div>
              <div> <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt fa-2x apartado1">Salir</i>
                </a>
            </div>
                

            </div>

        </div>

    </div>










    <div class="container">

        <table class="table table-hover table-borderless text-center ">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Nickname</th>


                </tr>
            </thead>

            <tr>
                <td>Pepe</td>
                <td>Garcia</td>
                <td>pepe@gmail.com</td>
                <td>PepeGarcia</td>
                <td><i class="bi bi-pencil-square edit"></i></td>
            </tr>


        </table>




        <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>

</html>