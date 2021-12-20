<nav id="menu" class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: rgb(241, 137, 56);">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://politecnics.barcelona/">
            <img src="https://localhost:443/projects/proyecto_abp_juego/media/logo.png" alt="" width="200" height="80">    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#primerScroll">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#segundoScroll">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="https://politecnics.barcelona/">Centro</a>
                </li>
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" aria-current="page" href="https://politecnics.barcelona/wp-content/uploads/banner-tour-virtual.jpg"">Ciclos</a>
=======
                    <a class="nav-link" aria-current="page" href="https://politecnics.barcelona/wp-content/uploads/banner-tour-virtual.jpg">Ciclos</a>
>>>>>>> 0bbd469475920b13ce2c4e9b79e44968ea4fa7e4
                </li>
            </ul>
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Idiomas
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li class="list-group-item">
                        <a href="indexes.php">
<<<<<<< HEAD
                            <img src="/proyecto_abp_juego/media/espana.png" height="50px" width="50px" alt="">
=======
                            <img src="./media/espana.png" height="50px" width="50px" alt="">
>>>>>>> 0bbd469475920b13ce2c4e9b79e44968ea4fa7e4
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="indexcat.php">
<<<<<<< HEAD
                        <img src="/proyecto_abp_juego/media/catalunya.png" height="50px" width="50px" alt="">
=======
                        <img src="./media/catalunya.png" height="50px" width="50px" alt="">
>>>>>>> 0bbd469475920b13ce2c4e9b79e44968ea4fa7e4
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="indexen.php">
<<<<<<< HEAD
                        <img src="/proyecto_abp_juego/media/inglaterra.png" height="50px" width="50px" alt="">
=======
                        <img src="./media/inglaterra.png" height="50px" width="50px" alt="">
>>>>>>> 0bbd469475920b13ce2c4e9b79e44968ea4fa7e4
                        </a>
                    </li>
                </ul>
            </li>
<<<<<<< HEAD
            <button type="button" class="btn btn-outline-warning">Acceso admin</button>
=======
            <button type="button" class="btn btn-outline-warning" style="display: <?php 
                if(!empty($user)) {
                    echo "none";
                }
                else {
                    echo "block";
                }

            ?>;">
            <a href="./views/login_admin.php"><?php echo $nameButtonAdmin;  ?></a>
            </button>
            
            <?php
                if(!empty($user)) {
                    echo "<a class='mx-3 nav-link disabled' aria-current='page' href='#'>". $user['nombre_usuario'] ."</a>";
                    
                }
                
            ?>
            <form action="php_controllers/btnSalirController.php" method="POST">

                <button type="submit" name="salirUser" class="btn btn-outline-primary mx-3 mt-3" style="color:cadetblue; display: <?php 
                    if(empty($user)) {
                        echo "none";
                    }
                    else {
                        echo "block";
                    }

                ?>;">
                Salir
                </button>


            </form>
           

>>>>>>> 0bbd469475920b13ce2c4e9b79e44968ea4fa7e4
        </div>
    </div>
</nav>