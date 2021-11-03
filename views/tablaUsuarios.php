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
    ?>
    <p class="h2"style="margin-left:5%;">Administración - Usuarios</p>
    <div class="container">
        <table class="table table-hover table-bordered text-center table-bordeless" style="margin-left:-5%;" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Nickname</th>
                    <th>Rol</th>

                </tr>
            </thead>

            <tr>
                <td>Pepe</td>
                <td>Garcia</td>
                <td>pepe@gmail.com</td>
                <td>PepeGarcia</td>
                <td>Admin</td>
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
        </table>
        <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>

</html>