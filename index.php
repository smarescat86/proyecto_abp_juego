<?php
session_start();
$PASS_SOPA_DE_LLETRES = 500;
$PASS_DYNAMAN = 4;
$PASS_MEMORY = 500;
$PASS_TRILE = 350;

$_SESSION['lang'] = 'esp';
include 'lang/' . $_SESSION['lang'] . '.php';


//session
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';


$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';

$nameButtonAdmin = "";

if(!empty($admin)) {
  $nameButtonAdmin = $admin['nombre_usuario'];

}
else {
  $nameButtonAdmin = $lang['accesoAdmin'];
}

//var_dump($user);

$_SESSION['backLandingPage'] = false;

  //Puntuacion

  require_once ('data/bd.php');
 
  if(!empty($user) ||  !empty($admin)) {
    
    $userId = 0;
    
    if(!empty($user)) {
      $userId = $user['id_usuario'];
    }
    else {
      $userId = $admin['id_usuario'];
    }

    $_SESSION['puntuacion'] = selectPuntuationUser($userId);
    

  }

  $puntuationUser = isset($_SESSION['puntuacion']) ? $_SESSION['puntuacion'] : '';

  $puntuacionSopaDeLetras = [];
  $puntuacionDynaman = [];
  $puntuacionMemory = [];
  $puntuacionTrile = [];

  if(!empty($puntuationUser)) {
    foreach($puntuationUser as $punts) {
      switch($punts["id_juego"]) {
        case 1:
          $puntuacionSopaDeLetras = $punts;
          break;
        case 2:
          $puntuacionDynaman = $punts;
          break;
        case 3:
          $puntuacionMemory = $punts;
          break;
        case 4:
          $puntuacionTrile = $punts;
          break;

      }
    }


  }

  //var_dump($puntuationUser);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoABP</title>
    <?php
      include 'bootstrap/index.php';
    ?>
    <link rel="stylesheet" href="styles/estilos.css">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>

    <?php
        include 'views/navBar.php';
    ?>

 <!--Primer Scroll-->

    <div id="primerScroll" class="container-fluid vh-100">
        <div class="row row-cols-1 pt-4 animar">
            <div id="titulo" class="col text-light text-center position-absolute mt-4 pt-4">
                <h1 class="text-capitalize align-middle mt-4 pt-4"><?php echo $lang["titulo"] ?></h1>
                <div class="divisor-principal">
                  <div class="divider-custom-linea"></div>
                  <div class="divider-custom-icono"><img src="./media/codigoqr-nuevoBlanco.PNG" draggable="false" alt=""></div>
                  <div class="divider-custom-linea"></div>
                </div>
                
                <p class="fs-5"><em><?php echo $lang["descripcionTitulo"] ?></em></p>
            </div>
        </div>
    </div>
    <!--Primer Scroll-->

    <!--Segundo Scroll-->
    <div id="segundoScroll" class="container-fluid vh-75 p-0">
        <div class="row row-cols-md-2 row-cols-1 g-0">

        <div class="col">
                <div class="contenedor">
                    <img class="imagen-juego" src="./media/sopa.PNG" alt="">
                    <div class="medio">
                    <div class="texto">
                    <?php echo $lang["juegoUno"] ?> <br>

                            <a href="games/sopaDeLetras/index.php" style="display: <?php 
                              if(empty($user) && empty($admin)) {
                                echo "none";
                              }
                            
                            ?>"><?php echo $lang["juega"] ?></a>

                            <a href="./views/login_user.php" style="display: <?php 
                              if(!empty($user) || !empty($admin)) {
                                echo "none";
                              }
                            
                            ?>;"><?php echo 'login' ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">

                
              <div class="contenedor" style="display:<?php 
                  if(isset($puntuacionSopaDeLetras)) {
                    if(!empty($puntuacionSopaDeLetras)) {
                      
                      if($puntuacionSopaDeLetras["puntuacion"] < $PASS_SOPA_DE_LLETRES) {
                        echo "none";
                      }

                    }
                  }
                
                ?>">
                  <img class="imagen-juego" src="./media/dynaman.png" alt="">
                    <div class="medio">
                      <div class="texto">
                      <?php echo $lang["juegoDos"] ?> <br> 
                      <a href="games/dynaman/home.html" style="display: <?php 
                              if(empty($user) && empty($admin)) {
                                echo "none";
                              }
                            
                            ?>"><?php echo $lang["juega"] ?></a>

                            <a href="./views/login_user.php" style="display: <?php 
                              if(!empty($user) || !empty($admin)) {
                                echo "none";
                              }
                            
                            ?>;"><?php echo 'login' ?></a>
                      </div>
                    </div>
                </div>


                <?php
                  if(isset($puntuacionSopaDeLetras)) {
                    if(!empty($puntuacionSopaDeLetras) &&(!empty($user) || !empty($admin))) {
                      
                      if($puntuacionSopaDeLetras["puntuacion"] < $PASS_SOPA_DE_LLETRES) {

                        echo "<div class='contenedor block'>";
                        echo " <img class='imagen-juego block' src='./media/dynaman.png' alt=''>";
                        echo "<i class='fas fa-lock fa-7x'></i>";
                        echo "</div>";
                      }

                    }
                  }

                ?>

                


            </div>

            <div class="col">
                <div class="contenedor" style="display: 
                <?php 

                  if(isset($puntuacionDynaman)) {
                    if(!empty($puntuacionDynaman)) {
                      
                      if($puntuacionDynaman["puntuacion"] < $PASS_DYNAMAN) {
                        echo "none";
                      }

                    }
                  }           
                
                
                
                ?>">
                    <img class="imagen-juego" src="./media/memory.png" alt="">
                    <div class="medio">
                    <div class="texto">
                    <?php echo $lang["juegoTres"] ?> <br> 
                    <a href="games/memory/index.php" style="display: <?php 
                    if(empty($user) && empty($admin)) {
                      echo "none";
                    }
                  
                  ?>"><?php echo $lang["juega"] ?></a>

                  <a href="./views/login_user.php" style="display: <?php 
                    if(!empty($user) || !empty($admin)) {
                      echo "none";
                    }
                  
                  ?>;"><?php echo 'login' ?></a>
                            <!--<a href="games/memory/index.php"><?php //echo $lang["juega"] ?></a>-->
                        </div>
                    </div>
              </div>
                
              <?php
                  if(isset($puntuacionDynaman)) {
                    if(!empty($puntuacionDynaman) &&(!empty($user) || !empty($admin))) {
                      
                      if($puntuacionDynaman["puntuacion"] < $PASS_DYNAMAN) {

                        echo "<div class='contenedor block'>";
                        echo " <img class='imagen-juego block' src='./media/memory.png' alt=''>";
                        echo "<i class='fas fa-lock fa-7x'></i>";
                        echo "</div>";
                      }

                    }
                  }

                ?>



            </div>

            <div class="col">
             <div class="contenedor" style="display: 
             <?php

              if(isset($puntuacionMemory)) {
                if(!empty($puntuacionMemory)) {
                  
                  if($puntuacionMemory["puntuacion"] < $PASS_MEMORY) {
                    echo "none";
                  }

                }
              }  
             
             
             ?>">
                    <img class="imagen-juego" src="./media/trille.png" alt="">
                    <div class="medio">
                        <div class="texto">
                        <?php echo $lang["juegoCuatro"] ?> <br> 
                        <a href="games/trile/html/index.php" style="display: <?php 
                              if(empty($user) && empty($admin)) {
                                echo "none";
                              }
                            
                            ?>"><?php echo $lang["juega"] ?></a>

                            <a href="./views/login_user.php" style="display: <?php 
                              if(!empty($user) || !empty($admin)) {
                                echo "none";
                              }
                            
                            ?>;"><?php echo 'login' ?></a>
                        </div>
                    </div>
                </div>

                <?php
                  if(isset($puntuacionMemory)) {
                    if(!empty($puntuacionMemory) &&(!empty($user) || !empty($admin))) {
                      
                      if($puntuacionMemory["puntuacion"] < $PASS_MEMORY) {

                        echo "<div class='contenedor block'>";
                        echo " <img class='imagen-juego block' src='./media/trille.png' alt=''>";
                        echo "<i class='fas fa-lock fa-7x'></i>";
                        echo "</div>";
                      }

                    }
                  }

                ?>



            </div>



        </div>
    </div>
    <!--Segundo Scroll-->

    <!--Tercer Scroll-->
    <div id="tercerScroll" class="container-fluid p-4">
        <div class="row h-50 p-4">
                <h2 class="text-center pt-4 bold">
                  <?php echo $lang["registrate"] ?>
                </h2>
                
                <div class="divisor-secundario">
                  <div class="divider-custom-linea" style="background-color: orange"></div>
                  <div class="divider-custom-icono"><img src="./media/codigoqr-naranja.PNG" draggable="false" alt=""></div>
                  <div class="divider-custom-linea" style="background-color: orange"></div>
                </div>
                
                <p class="text-center text-secondary">
                <?php echo $lang["descripcionRegistrate1"] ?>
                </p>

                <p class="text-center">
                  <?php echo $lang["descripcionRegistrate2"] ?>
              </p>
                <div style="justify-content: center; display:flex">
                  <button type="button" class="btn btn-secondary p-3 m-2 align-self-center" style="width: 15%;"><a style="text-decoration: none; color:#fff"; href="./views/login_user.php"><?php echo $lang["boton1"] ?></a></button>
                  <button type="button" class="btn btn-dark p-3 m-2 align-self-center" style="width: 15%;"><a style="text-decoration: none; color:#fff"; href="./views/login_user.php"><?php echo $lang["boton2"] ?></a></button>
                </div>


        </div>
    </div>
    <!--Tercer Scroll-->






    <!--Cuarto Scroll-->
    <div id="cuartoScroll" class="container-fluid vh-50 pt-4 mt-4 text-light">
        <h2 class="text-center pt-4 mt-4">
        <?php echo $lang["tituloCiclos"] ?>
        </h2>
        
        <div class="divisor-secundario">
                  <div class="divider-custom-linea"></div>
                  <div class="divider-custom-icono"><img src="./media/codigoqr-blanco.PNG" draggable="false" alt=""></div>
                  <div class="divider-custom-linea"></div>
                </div>

        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 p-4 m-4">

            <div class="col text-center">
                <img class="img-fluid" src="./media/logo-informatica.png" alt="" draggable="false" width="100px" height="100px">
                <h3 class="border-bottom">
                <?php echo $lang["informatica"] ?>
                </h3>
                <p>
                <?php echo $lang["descripcionInformatica"] ?>
                </p>
            </div>

            <div class="col text-center">
                <img src="./media/logo-marketing.png" alt="" draggable="false" width="100px" height="100px">
                <h3 class="border-bottom">
                <?php echo $lang["marketing"] ?>
                </h3>
                <p>
                <?php echo $lang["descripcionMarketing"] ?>
                </p>
            </div>

            <div class="col text-center">
                <img src="./media/logo-turismo.png" alt="" draggable="false" width="100px" height="100px">
                <h3 class="border-bottom">
                <?php echo $lang["turismo"] ?>
                </h3>
                <p>
                <?php echo $lang["descripcionTurismo"] ?>
                </p>
            </div>

            <div class="col text-center">
                <img src="./media/logo-administracion.png" alt="" draggable="false" width="100px" height="100px">
                <h3 class="border-bottom">
                <?php echo $lang["administracion"] ?>
                </h3>
                <p>
                <?php echo $lang["descripcionAdministracion"] ?>
                </p>
            </div>
        </div>
    </div>
    <!--Cuarto Scroll-->

    <!--Footer -->

    <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="border-bottom"><i class="bi bi-person"></i> Andrés Toro</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="mailto:atorop2021@cepnet.net?Subject=¡Quiero%20contactar%20contigo!" class="text-dark"><i class="bi bi-envelope"></i> Email</a>
          </li>
          <li>
            <a href="https://github.com/AndresToro11" class="text-dark"><i class="bi bi-github"></i> Github</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="border-bottom mb-0"><i class="bi bi-bricks"></i> Pol Nuñez</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="mailto:pnunezr2021@cepnet.net?Subject=¡Quiero%20contactar%20contigo!" class="text-dark"><i class="bi bi-envelope"></i> Email</a>
          </li>
          <li>
            <a href="https://github.com/polnunezr" class="text-dark"><i class="bi bi-github"></i> Github</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="border-bottom"><i class="bi bi-controller"></i> Santiago Maresca</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="mailto:smarescat86@cepnet.net?Subject=¡Quiero%20contactar%20contigo!" class="text-dark"><i class="bi bi-envelope"></i> Email</a>
          </li>
          <li>
            <a href="https://github.com/smarescat86" class="text-dark"><i class="bi bi-github"></i> Github</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="border-bottom mb-0"><i class="bi bi-dice-5"></i> Pau Granell</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="mailto:pgranellm26@cepnet.net?Subject=¡Quiero%20contactar%20contigo!" class="text-dark"><i class="bi bi-envelope"></i> Email</a>
          </li>
          <li>
            <a href="https://github.com/paucepnet" class="text-dark"><i class="bi bi-github"></i> Github</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="#">Centre d'Estudis Politècnics</a>
  </div>
  <!-- Copyright -->
</footer>

    <!--Footer -->

        
    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>

</body>

</html>