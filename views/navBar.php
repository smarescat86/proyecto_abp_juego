<nav id="menu" class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: rgb(241, 137, 56);">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://politecnics.barcelona/">
            <img src="../media/logo.png" alt="" width="200" height="80">    
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
                    <a class="nav-link" aria-current="page" href="https://politecnics.barcelona/wp-content/uploads/banner-tour-virtual.jpg"">Ciclos</a>
                </li>
            </ul>
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Idiomas
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li class="list-group-item">
                        <a href="indexes.php">
                            <img src="./media/espana.png" height="50px" width="50px" alt="">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="indexcat.php">
                        <img src="./media/catalunya.png" height="50px" width="50px" alt="">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="indexen.php">
                        <img src="./media/inglaterra.png" height="50px" width="50px" alt="">
                        </a>
                    </li>
                </ul>
            </li>
            <button type="button" class="btn btn-outline-warning"><a href="./views/login_admin.php"><?php echo $nameButtonAdmin;  ?></a></button>
        </div>
    </div>
</nav>