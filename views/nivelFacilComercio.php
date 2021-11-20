<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../bootstrap/index.php';
    ?>
    <title></title>
    <style media="screen">
        .row {
            text-align: center;
        }
        .card {
            display: inline-block;
            width: 200px;
            height: 200px;
            background-color: #eee;
            cursor: pointer;
        }
        .card:hover {
            box-shadow: inset 0px 0px 0px 1px red;
            box-sizing: border-box;
        }

        p {
            clear: both;
            float: left;
        }
    </style>

</head>
<script src="../js/memory/nivelFacilComercio.js"></script>

<body onload='Ini()'>
    <div class="row">
        <div class="card" id='d1' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d2' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d3' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d4' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d5' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
    </div>
    <div class="row">
        
        <div class="card" id='d6' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d7' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d8' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d9' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d10' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
    </div>
    <div class="row">
        
        <div class="card" id='d11' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d12' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d13' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d14' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d15' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
    </div>
    <div class="row">
       <div class="card" id='d16' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d17' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d18' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d19' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
        <div class="card" id='d20' onclick='canviar_imatge(this)' ondblclick='canviar_1s(this)'>
        </div>
    </div>






    <br>

    <p id='score'>Score:</p>
    <p id='miss'>Fails:</p>

</body>

</html>