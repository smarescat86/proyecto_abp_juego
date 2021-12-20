<?php
    include './lang/lang.php';
?>

<nav id="menu" class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: rgb(241, 137, 56);">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://politecnics.barcelona/">
            <img src="/proyecto_abp_juego/media/logo.png" alt="" width="200" height="80">    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#primerScroll">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#segundoScroll"><?php echo $lang["juegos"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="https://politecnics.barcelona/"><?php echo $lang["centro"] ?></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" aria-current="page" href="#cuartoScroll""><?php echo $lang["ciclos"] ?></a>

                </li>
            </ul>
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $lang["idiomas"] ?>
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li class="list-group-item">
                        <a href="index.php?lang=esp">
                            <img src="./media/espana.png" height="50px" width="50px" alt="">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?lang=cat">
                            <img src="./media/catalunya.png" height="50px" width="50px" alt="">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php?lang=eng">
                        <img src="./media/inglaterra.png" height="50px" width="50px" alt="">
                </ul>
            </li>
            <!-- <button type="button" class="btn btn-outline-warning"><a style="text-decoration: none; color:black;" href="./views/login_admin.php"><?php //echo $lang["accesoAdmin"] ?></a></button> -->

            <button type="button" class="btn btn-outline-warning" style="display: <?php 
                if(!empty($user)) {
                    echo "none";
                }
                else {
                    echo "block";
                }

            ?>;">
            <a style="text-decoration: none; color:black;" href="./views/login_admin.php"><?php echo $nameButtonAdmin; ?></a>
            </button>
            
            <?php
                if(!empty($user)) {
                    echo "<a class='mx-3 nav-link disabled' aria-current='page' href='#'>". $user['nombre_usuario'] ."</a>";
                    
                }
                
            ?>
            <form action="php_controllers/btnSalirController.php" method="POST">

                <button type="submit" name="salirUser" class="btn btn-warning mx-3 mt-3" style="color: rgb(89, 89, 211); display: <?php 
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
           
        </div>
    </div>
</nav>