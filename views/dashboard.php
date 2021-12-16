<?php

if (!isset($_SESSION)) {
    session_start();

    $_SESSION['backLandingPage'] = true;
}
else {
    $_SESSION['backLandingPage'] = true;
}
//print_r($_SESSION['user']);
//$admin = $_SESSION['user'];
?>


<div class="container-fluid">
    <div class="row rowDashboard">
        <div class="dashboard  bg-dark col-4 col-md-3 col-lg-2">
            <div class="row rowDashboard titulo align-items-start">
                <div class="col">
                    <h4 class="text-light m-3">Admin</h4>
                    <div class="lineDiv"></div>
                </div>
                
                
            </div>
            <div class="apartados">
                <div class="row rowDashboard align-items-center">
                    <div class="col">
                    <a class="apartado m-3" href="./administracionPerfil.php"><i class="fas fa-user-circle fa-1x"></i> Mi Perfil</a>
                    </div>

                </div>
                <div class="row rowDashboard align-items-center">
                    <div class="col">
                    <a class="apartado m-3" href="./tablaUsuarios.php"><i class="fas fa-users fa-1x"></i> Usuarios </a>
                    </div>

                    </div>
                <div class="row rowDashboard align-items-center">
                    <div class="col">
                    <a class="apartado m-3" href="./administracionJuego.php"><i class="fas fa-gamepad fa-1x"></i> Juegos</a>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                    <a class="apartado m-3 disabled" href="./tablaSuperAdmin.php"><i class="fas fa-user-cog"></i> Admin</a>
                    </div>
                </div>
                
                
                
            </div>
            <div class="divLogOut m-3">
                <div class="row rowDashboard align-items-end logout line">

                    <div class="col">
                        <div class="lineDiv"></div>                        
                    </div>



                </div>

                <div class="row rowDashboard align-items-center logout">

                    <form action="../php_controllers/btnSalirController.php" method="POST">
                        
                        <button  type="submit" id="salir" name="salir" style="background-color:transparent; border:unset; color: white;">

                        <i style="color:white" class="fas fa-power-off fa-1x"></i> Salir

                        </button>
                       

                    </form>
                    

                    <!--
                        <a class="apartado" name="salir" id="salir" href="#" onclick="this.parentNode.submit(); return false;"> <i class="fas fa-power-off fa-1x">
                            
                        </i> Salir</a>
                    -->

                    <!-- <div class="col">
                        <a class="apartado" id="salir" href=""><i class="fas fa-power-off fa-1x"></i> Salir</a>
                    </div> -->
                </div>
                    
            </div>
        </div>
