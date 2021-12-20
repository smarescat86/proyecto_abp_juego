<?php
    require_once('../data/bdAdmin.php');
    
    session_start();
    $admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
    if(!empty($admin)) {
        $admin = selectUpdateAdmin($admin['id_usuario']);

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sass/administracion/dashboard/estiloDashboard.css">
    <link rel="stylesheet" href="../styles/sass/administracion/perfil/estiloPerfil.css">
    <?php
    include ('../bootstrap/index.php')
    ?>
    <title>Document</title>
</head>
<body>   



    <?php
        //include('navBar.php')
        include('dashboard.php')
    ?>


    <div class="colPerfil col col-8 col-md-9 col-lg-10">
        <div class="row rowPerfil title align-items-start">
            <div class="col">
                <h1 class="p-4">Mi Perfil</h1>
                <div class="lineDiv perfil"></div>
            </div>
        </div>
        <form action="../php_controllers/adminPerfilController.php" method="POST">
            <div class="row rowPerfil inputs align-items-center">
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping"> Nombre</span>
                            <input name="nombre" type="text" class="form-control" value=<?php echo $admin['nombre']; ?> aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">Apellido</span>
                            <input name="apellido" type="text" class="form-control" value=<?php echo $admin['apellido']; ?> aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>

            <div class="row rowPerfil inputs align-items-center">
                <div class="col-sm-12 col-lg-5">
                <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">Email</span>
                            <input name="email" type="text" class="form-control" value=<?php echo $admin['email']; ?> aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <!--
                    <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Contraseña</span>
                            <input name="password" type="text" class="form-control" placeholder="*********" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    -->
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">Nickname</span>
                        <input name="nickname" type="text" class="form-control" value=<?php echo $admin['nombre_usuario']; ?> aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                </div>
            </div>

            <div class="row rowPerfil inputs align-items-center">
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">Contraseña actual</span>
                        <input name="passwordActual" type="password" class="form-control" 
                        value="" aria-label="Username" aria-describedby="addon-wrapping" placeholder="****">
                    </div>
                </div>

                <div class="col-sm-12 col-lg-5">

                    <div class="input-group" >
                            <span class="input-group-text" id="addon-wrapping">Contraseña nova</span>
                            <input name="passwordNew" type="password" class="form-control" 
                            value="" aria-label="Username" aria-describedby="addon-wrapping" placeholder="****">
                    </div>

                </div>
                
            </div>
    
               

            

            <div class="row rowPerfil inputs align-items-center">
                <div class="col">
                    <button type="submit" class="btn btn-outline-secondary" name="update">Guardar</button>
                </div>
                
            </div>

        </form>

        <?php
            if(isset($_SESSION['correcto'])) {

                if($_SESSION['correcto'] == false) {
                    echo "<script>";
                    echo "setTimeout(function(){ alert('".$_SESSION['mensaje']."'); }, 200);";
                    echo "</script>";

                    //print_r($_SESSION['passwordActualEncriptada']);

                    $_SESSION['correcto'] = true;
                }


            }
            
            if(isset($_SESSION['updateCorrect'])) {

                if($_SESSION['updateCorrect'] == true) {

                    echo "<script>";
                    echo "setTimeout(function(){ alert('Actualizado correctamente!'); }, 200);";
                    echo "</script>";

                    $_SESSION['updateCorrect'] = false;

                }

            }
            
                    
                    
        ?>   


        


    </div>


    </div>
    </div>

    
    

    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>
</html>


 