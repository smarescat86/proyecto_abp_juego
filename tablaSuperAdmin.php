<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - Super admin</title>
    <?php
    include 'bootstrap/index.php';
    ?>
</head>

<body>
   
        <?php
        include 'views/navBarTablas.php' 
        ?>
        
            <p class="h2">Administración - Super admin</p>
                <i class="bi bi-person-plus">Crear admin</i>&nbsp;&nbsp;&nbsp;
                <i class="bi bi-box-arrow-right">Salir</i>
               
           
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre_Usuario</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Pepe</th>
                    <td>Garcia</td>
                    <td>pepe@gmail.com</td>
                    <td>PepeGarcia</td>
                    <td><i class="bi bi-pencil-square"></i></td>
                </tr>


            </tbody>
        </table>
    </div>



</body>

</html>