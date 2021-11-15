<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include '../bootstrap/index.php';
    ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
       $(window).on('load', function() {
        $("#myModal").modal('show');

    });

</script>

</head>

<body>   

<div id="myModal" class="modal fade" id="basiceModal" tabindex="-1" aria-labelledby="basicModalLabel" aria-hidden="true" data-bs-target="#basiceModal">
 
  <div class="modal-dialog modal-lg">
 
    <div class="modal-content">
 
      <div class="modal-header">
 
        <h5 class="modal-title" id="basicModalLabel">Selecciona el ciclo en que estes interesado </h5>
 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 
      </div>
 
      <div class="modal-body">
 
        Instrucciones:
        <ul>
            <li>Marketing y Comercio</li>
            <li>Hotelería y Turismo</li>
            <li>Informática y Comunicación</li>
            <li>Administración y Gestión</li>

        </ul>   
 
      </div>
 
      <div class="modal-footer justify-content-center">
      <button type="button" class="btn btn-primary btn-sm">Marketing y Comercio</button>
      <button type="button" class="btn btn-primary btn-sm">Hotelería y Turismo</button>
      <button type="button" class="btn btn-primary btn-sm">Informática y Comunicación</button>
      <button type="button" class="btn btn-primary btn-sm">Administración y Gestión</button>
            
 
      </div>
 
    </div>
 
  </div>
 
</div> 
</body>

</html>