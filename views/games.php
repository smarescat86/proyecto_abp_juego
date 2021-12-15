<?php
include '../bootstrap/index.php';

session_start();

$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
print_r($user);

if (empty($user)) 
{
  header("Location: login_user.php");
}
?>

<div class="container">

  <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center align-items-center h-100">
    <div class="col">
      <div class="card shadow">
        <img src="../media/sopaDeLetras.png" class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#d9d6d6">
          <h5 class="card-title">Sopa de letras</h5>
          <p class="card-text">Aquí veras las cualidades humanas que tenemos como politica de enseñanza hacia nuestros alumnos.
            Hablaremos un poco sobre nuestra FRASE.
          </p>
          <div style="display: flex; justify-content: flex-end">
            <a href="#" class="btn btn-dark">Jugar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#d9d6d6">
          <h5 class="card-title">Memoria</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div style="display: flex; justify-content: flex-end">
            <a href="#" class="btn btn-dark">Jugar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#d9d6d6">
          <h5 class="card-title">Bomberman</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          <div style="display: flex; justify-content: flex-end">
            <a href="#" class="btn btn-dark">Jugar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body" style="background-color:#d9d6d6">
          <h5 class="card-title">Trile</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div style="display: flex; justify-content: flex-end">
            <a href="#" class="btn btn-dark">Jugar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>