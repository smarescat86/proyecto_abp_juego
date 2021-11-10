<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../bootstrap/index.php';
    ?>
    
  

    <!-- Main JS-->

    <title>Document</title>
</head>

<body>
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <!-- Login Form -->
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title">Anadir Administrador</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
                <label for="Username">Nombre</label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Nombre">
            </div>
            <div class="mb-3">
                <label for="Username">Apellidos</label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Apellidos">
            </div>
            <div class="mb-3">
                <label for="Username">Usuario<span class="text-danger">*</span></label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce Usuario">
            </div>

            <div class="mb-3">
                <label for="Password">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>
            <div class="mb-3">
                <label for="Username">Email<span class="text-danger">*</span></label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Introduce email">
            </div>
     
          </div>
          <div class="modal-footer pt-4">                  
            <button type="button" class="btn btn-success mx-auto w-100">Registrar</button>
          </div>
      </form>
    </div>
  </div>

</body>

</html>