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
        include('navBar.php')
    ?>

    <?php
        include('dashboard.php')
    ?>


    <div class="colPerfil col col-8 col-md-9 col-lg-10">
        <div class="row rowPerfil title align-items-start">
            <div class="col">
                <h1 class="p-4">Mi Perfil</h1>
                <div class="lineDiv perfil"></div>
            </div>
        </div>
            <div class="row rowPerfil inputs align-items-center">
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping"> Nombre</span>
                            <input type="text" class="form-control" value="Pau" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">Apellido</span>
                            <input type="text" class="form-control" value="Granell" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>

            <div class="row rowPerfil inputs align-items-center">
                <div class="col-sm-12 col-lg-5">
                <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping">Email</span>
                            <input type="text" class="form-control" value="pau@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Contraseña</span>
                            <input type="text" class="form-control" placeholder="*********" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
            </div>

            <div class="row rowPerfil inputs align-items-center">
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary">Guardar</button>
                </div>
                
            </div>


        


    </div>


    </div>
    </div>
    
    

        
    
    

    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>
</html>