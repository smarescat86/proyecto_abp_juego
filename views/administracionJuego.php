<?php
    require_once('../data/bd.php');

    $tablaSopaDeLletres = selectTablaId(1);
    $tablaBomberman = selectTablaId(2);
    $tablaTrile = selectTablaId(3);
    $tablaMemory = selectTablaId(4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sass/administracion/dashboard/estiloDashboard.css">
    <link rel="stylesheet" href="../styles/sass/administracion/juegos/estiloJuegos.css">
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

    <div class="colJuego col col-8 col-md-9 col-lg-10">
        <div class="row rowJuego title align-items-start">
            <div class="col">
                <h1 class="p-4">Juegos</h1>
                <div class="lineDiv juego"></div>
            </div>
        </div>

       
        

        <div class="row rowJuego tablas">
            <div class="colJuego col p-5 align-items-center">


                <div id="nav">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link visible active" id="home-tab" data-bs-toggle="tab" 
                        data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" name="sopaDeLletres">Sopa de lletres</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" 
                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" name="bomberman">Bomberman</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" 
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" name="trile">Trile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" 
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" name="memory">Memory</button>
                    </li>
                    </ul>
                </div>


                <div class="divTablas" id="divTablaSopaDeLletres">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Tiempo</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php  $count = 0; ?>
                            <?php foreach($tablaSopaDeLletres as $dato) {                                
                                ?>
                                <tr class="table-hover">
                                <th scope="row"><?php echo $count++?></th>
                                <td><?php echo $dato['id_usuario']  ?></td>
                                <td><?php echo $dato['puntuacion']  ?></td>
                                <td><?php echo $dato['tiempo']  ?></td>

                                </tr>

                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>

                <div class="divTablas" id="divTablaBomberman">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Tiempo</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php  $count = 0; ?>
                            <?php foreach($tablaBomberman as $dato) {                                
                                ?>
                                <tr class="table-hover">
                                <th scope="row"><?php echo $count++?></th>
                                <td><?php echo $dato['id_usuario']  ?></td>
                                <td><?php echo $dato['puntuacion']  ?></td>
                                <td><?php echo $dato['tiempo']  ?></td>

                                </tr>

                            <?php }?>

                            
                        </tbody>
                    </table>
                </div>

                <div class="divTablas" id="divTablaTrile">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Tiempo</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php  $count = 0; ?>
                            <?php foreach($tablaTrile as $dato) {                                
                                ?>
                                <tr class="table-hover">
                                <th scope="row"><?php echo $count++?></th>
                                <td><?php echo $dato['id_usuario']  ?></td>
                                <td><?php echo $dato['puntuacion']  ?></td>
                                <td><?php echo $dato['tiempo']  ?></td>

                                </tr>

                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>

                <div class="divTablas" id="divTablaMemory">

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Puntuación</th>
                            <th scope="col">Tiempo</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php  $count = 0; ?>
                            <?php foreach($tablaMemory as $dato) {                                
                                ?>
                                <tr class="table-hover">
                                <th scope="row"><?php echo $count++?></th>
                                <td><?php echo $dato['id_usuario']  ?></td>
                                <td><?php echo $dato['puntuacion']  ?></td>
                                <td><?php echo $dato['tiempo']  ?></td>

                                </tr>

                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>
    </div>
    </div>
    
    <script src="../js/administracionJuegos.js"></script>
    <script src="https://kit.fontawesome.com/7fae944b38.js" crossorigin="anonymous"></script>
</body>
</html>