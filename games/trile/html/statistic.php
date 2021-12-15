<?php    
   $datosTabla = selectTableTrile();
?>

<div class="container-fluid" id="containerStatistic">
    <div class="row">
        <div class="col d-flex align-items-center" style="height: 200px;">
            <div id="buttonBackStatistic"></div>

        </div>

    </div>
    <div class="row">
        <div class="col align-items-center">
            <div id="tableStatistic">

                <table class="table table-info table-striped">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Puntuación</th>
                    <th scope="col">Tiempo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $count = 0; ?>
                    <?php foreach($datosTabla as $datoTabla) { ?>
                        <tr>
                        <th scope="row"><?php echo $count++?></th>

                            <td><?php echo $datoTabla['id_usuario']  ?></td>
                            <td><?php echo $datoTabla['puntuacion']  ?></td>
                            <td><?php echo $datoTabla['tiempo']  ?></td>

                        </tr>
                    
                    <?php }?>


                </tbody>

                </table>

            </div>
            
                
        </div>
        
    </div>


</div>