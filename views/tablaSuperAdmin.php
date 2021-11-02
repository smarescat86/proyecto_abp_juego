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
    include './navBar.php';
    include './navBarTablas.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="h2">Administración - Super Admin</p>
            </div>
            <div class="col d-flex flex-row-reverse">
                <a class="nav-link d-flex" href="#">
                    <i class="fas fa-sign-out-alt fa-1x text-dark">Salir</i>
                </a>
                <a class="nav-link d-flex" href="#">
                    <i class="fas fa-user-plus fa-1x text-dark">Crear admin</i>
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <table class="table table-hover table-bordered text-center table-bordeless">
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
                <td>
                    <a class="nav-link" href="#">
                        <i class="bi bi-pencil-square edit"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>

</html>