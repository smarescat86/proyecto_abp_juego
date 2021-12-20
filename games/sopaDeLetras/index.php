<?php 
  session_start();
  $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
  //var_dump($user);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Word search</title>
    
    <link rel="stylesheet" href="style/style.css" />
    <script src="js/app3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container-fluid gameArea bg-wall">
      <div id="game-title" class="title" >
        <ul>
          <li>W</li>
          <li>e</li>
          <li>l</li>
          <li>c</li>
          <li>o</li>
          <li>m</li>
          <li>e</li>
          <li class="spaced">t</li>
          <li>o</li>
          <li class="spaced">t</li>
          <li>h</li>
          <li>e</li>
          <li class="spaced">W</li>
          <li>o</li>
          <li>r</li>
          <li>d</li>
          <li class="spaced">S</li>
          <li>e</li>
          <li>a</li>
          <li>r</li>
          <li>c</li>
          <li>h</li>
          <li>!</li>
        </ul>
      </div>
      <button id="btnStart" class="btnStart btn btn-outline-light">Start</button>
      <div id="game-container">
        <div id="game" class="start-animation">
          <div id="gridContainer"></div>
          <div id="myListWords" class="wordList">
            <div class="data">
              <div id="countDown"></div>
              <div id="score"></div>
            </div>
          </div>
        </div>
    </div>
    <!--Final del juego-->
    <div id="game-result">
      <div id="finalText" class="finalText"></div>
      <!--TABLES-->
      <table id="scoreBoard" class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Player</th>
            <th scope="col">Time</th>
            <th scope="col">Score</th>
          </tr>
        </thead>
        <tbody id="cuerpo">
          
        </tbody>
      </table>
      <div id="finalButtons" class="finalButtons">
        <button id="exit-game" class="btn btn-outline-light btnFinalGame">exit</button>
        <button id="play-again" class="btn btn-outline-light btnFinalGame">play again</button>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modalClass" id="modal-word-description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content modal-content2">
          <div class="modal-header">
            <h5 class="modal-title modal-title2" id="exampleModalLabel"></h5>
          </div>
          <div class="modal-body typed-out"></div>
          <div class="btn-move">
            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Aceptar</button>
          </div>
          
        </div>
      </div>
    </div>
    <div id="starting-seconds-container">
      <h1 id="starting-seconds">3</h1>
    </div>

  </body>
</html>
