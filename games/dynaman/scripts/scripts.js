

var game = [
    [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 4, 2, 2, 3, 2, 2, 3, 3, 3, 3, 2, 2, 2, 1],
	[1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1],
	[1, 2, 3, 2, 3, 2, 2, 3, 3, 2, 3, 3, 2, 2, 1],
	[1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1],
	[1, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 1],
	[1, 3, 1, 3, 1, 3, 1, 3, 1, 2, 1, 3, 1, 3, 1],
	[1, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1],
	[1, 3, 1, 3, 1, 3, 1, 2, 1, 3, 1, 3, 1, 3, 1],
	[1, 2, 3, 2, 3, 3, 2, 3, 2, 3, 2, 3, 3, 2, 1],
	[1, 2, 1, 3, 1, 2, 1, 2, 1, 3, 1, 3, 1, 2, 1],
    [1, 2, 2, 2, 3, 3, 3, 3, 2, 3, 3, 2, 2, 2, 1],
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2]
];


//---------OBJETOS------------------

const audioExplosion = new Audio ('media/sonido-explosion.mp3');
const audioCorrecto = new Audio ('media/correcto.mp3');

const musica = new Audio ('media/musica-fondo.mp3');
musica.loop = true;

let musicaAux = 'off';

let gameOver = false;

let puntuacion = 0;

var personaje = {
    isVivo: true,
    x: 2,
    y: 1,
    dir: 'personaje-right'
}

var bomba = {
    imagen: 'dinamita',
    estado: 'off',
    rango: 2,
    x: null,
    y: null
}

//-------IMAGENES BOMBA----------

    var bombaCentro = {
        imagen:'bomba-centro',
        x: null,
        y: null 
    }
    var bombaMedioHorizontal = {
        imagen: 'bomba-medio-horizontal',
        x: null,
        y: null
    }

    var bombaMedioVertical = {
        imagen: 'bomba-medio-vertical',
        x: null,
        y: null
    }

    var bombaUp = {
        imagen: 'bomba-up',
        x: null,
        y: null
    }

    var bombaDown = {
        imagen: 'bomba-down',
        x: null,
        y: null
    }

    var bombaright = {
        imagen: 'bomba-right',
        x: null,
        y: null
    }

    var bombaLeft = {
        imagen: 'bomba-left',
        x: null,
        y: null
    }

    var allBombs = [10, 11, 12, 13 ,14 ,15, 16];


//-------------------------------

//----------CICLOS---------------

var marketing = {
    num: 6,
    imagen: 'logo-marketing',
    encontrado: false,
    x: null,
    y: null
};
var informatica = {
    num: 7,
    imagen: 'logo-informatica',
    encontrado: false,
    x: null,
    y: null
};
var turismo = {
    num: 8,
    imagen: 'logo-turismo',
    encontrado: false,
    x: null,
    y: null
};
var administracion = {
    num: 9,
    imagen: 'logo-administracion',
    encontrado: false,
    x: null,
    y: null
};

var ciclos = [marketing, informatica, turismo, administracion];

//----------------------------------

function mapearCiclos(){

    var barrilesEjeX = [];
    var barrilesEjeY = [];

    for (var i = 0; i < game.length; i++) {
        for (var j = 0; j < game[i].length; j++) {
            if(game[i][j] === 3){
                barrilesEjeX.push(i);
                barrilesEjeY.push(j);
            }
        }
    }

    var random;

    for (let z = 0; z < 4; z++) {
        random = Math.floor(Math.random() * (barrilesEjeX.length - 1)) + 1;

        ciclos[z].x = barrilesEjeX[random];
        ciclos[z].y = barrilesEjeY[random];

        game[barrilesEjeX[random]][barrilesEjeY[random]] = ciclos[z].num;
    }
}

mapearCiclos();


function drawMapa(){
    var html = "";
    var gameMap = document.getElementById("game");
        for (var i = 0; i < game.length; i++) {
            for (var j = 0; j < game[i].length; j++) {
                switch(game[i][j]){
                    case 1:
                        html += "<div class='wall'></div>";
                    break;

                    case 2:
                        html += "<div class='vacio'></div>";
                    break;

                    case 3:
                        html += "<div class='barriles'></div>";
                    break;

                    case 4:
                        html += "<div class='vacio'></div>";
                    break;

                    case 5:
                        html += "<div class='" + bomba.imagen + "'></div>";
                    break;

                    case 6:
                        html += "<div class='vacio'></div>";
                    break;

                    case 7:
                        html += "<div class='vacio'></div>";
                    break;

                    case 8:
                        html += "<div class='vacio'></div>";
                    break;

                    case 9:
                        html += "<div class='vacio'></div>";
                    break;

                    case 10:
                        html += "<div class='bomba-centro'></div>";
                    break;

                    case 11:
                        html += "<div class='bomba-medio-horizontal'></div>";
                    break;

                    case 12:
                        html += "<div class='bomba-medio-vertical'></div>";
                    break;

                    case 13:
                        html += "<div class='bomba-up'></div>";
                    break;

                    case 14:
                        html += "<div class='bomba-down'></div>";
                    break;

                    case 15:
                        html += "<div class='bomba-left'></div>";
                    break;

                    case 16:
                        html += "<div class='bomba-right'></div>";
                    break;
                }
            }
            html += "</br>";
        }
    gameMap.innerHTML = html;
}
drawMapa();

function drawJugador(){

    var html = "";
    var gameMap = document.getElementById("game2");
    for (var i = 0; i < game.length; i++) {
        for (var j = 0; j < game[i].length; j++) {
            switch(game[i][j]){
                case 1:
                    html += "<div class='wall'></div>";
                break;

                case 2:
                    html += "<div class='vacio'></div>";
                break;

                case 3:
                    html += "<div class='vacio'></div>";
                break;

                case 4:
                    html += "<div class='" + personaje.dir + "'></div>";
                break;

                case 5:
                    html += "<div class='vacio'></div>";
                break;

                case 6:
                    html += "<div class='" + marketing.imagen + "'></div>";
                break;

                case 7:
                    html += "<div class='" + turismo.imagen + "'></div>";
                break;

                case 8:
                    html += "<div class='" + informatica.imagen + "'></div>";
                break;

                case 9:
                    html += "<div class='" + administracion.imagen + "'></div>";
                break;

                case 10:
                    html += "<div class='vacio'></div>";
                break;

                case 11:
                    html += "<div class='vacio'></div>";
                break;

                case 12:
                    html += "<div class='vacio'></div>";
                break;

                case 13:
                    html += "<div class='vacio'></div>";
                break;

                case 14:
                    html += "<div class='vacio'></div>";
                break;

                case 15:
                    html += "<div class='vacio'></div>";
                break;

                case 16:
                    html += "<div class='vacio'></div>";
                break;
            }
        }
        html += "</br>";
    }
    gameMap.innerHTML = html;
}
drawJugador();

function cogerCiclo(coordenadas){
    switch(coordenadas){
        case 6:
            document.getElementById('marketing-check').style.visibility = 'visible';
            marketing.encontrado = true;
            audioCorrecto.play();
            puntuacion++;
        break;

        case 7:
            document.getElementById('turismo-check').style.visibility = 'visible';
            turismo.encontrado = true;
            audioCorrecto.play();
            puntuacion++;
        break;

        case 8:
            document.getElementById('informatica-check').style.visibility = 'visible';
            informatica.encontrado = true;
            audioCorrecto.play();
            puntuacion++;
        break;

        case 9:
            document.getElementById('administracion-check').style.visibility = 'visible';
            administracion.encontrado = true;
            audioCorrecto.play();
            puntuacion++;
        break;
    }

    if(marketing.encontrado === true && informatica.encontrado === true && turismo.encontrado === true && administracion.encontrado === true){
        gameOver = true;
        texto = "Has ganado";
        /*document.getElementById("texto-modal").innerHTML = texto;
        modal.style.display = "block";*/
        clearInterval(tempo);
        subirDatos(puntuacion, tiempoTotal);
    }
}

    document.onkeydown = function (event) {
        if(gameOver === false){
           switch(event.code){

            case "ArrowRight":
                if (game[personaje.x][personaje.y + 1] !== 1 && game[personaje.x][personaje.y + 1] !== 3) { //Define limites del mapa
                    cogerCiclo(game[personaje.x][personaje.y + 1]);
                    if([10, 11, 12, 13, 14, 15, 16].indexOf(game[personaje.x][personaje.y + 1]) >= 0){
                        game[personaje.x][personaje.y] = 2; 
                        personaje.y += 1;
                        game[personaje.x][personaje.y] = 4;
                        matarPersonaje();
                    }
                    else{
                        personaje.dir = "personaje-right";
                        game[personaje.x][personaje.y] = 2; 
                        personaje.y += 1;
                        game[personaje.x][personaje.y] = 4;
                        drawJugador();
                    }
                    
                }
            break;

            case "ArrowLeft":
                if (game[personaje.x][personaje.y - 1] !== 1 && game[personaje.x][personaje.y - 1] !== 3) {
                    cogerCiclo(game[personaje.x][personaje.y - 1]);
                    if([10, 11, 12, 13, 14, 15, 16].indexOf(game[personaje.x][personaje.y - 1]) >= 0){
                        game[personaje.x][personaje.y] = 2; 
                        personaje.y -= 1;
                        game[personaje.x][personaje.y] = 4;
                        matarPersonaje();
                    }
                    else{
                        personaje.dir = "personaje-left";
                        game[personaje.x][personaje.y] = 2; 
                        personaje.y -= 1;
                        game[personaje.x][personaje.y] = 4;
                        drawJugador(); 
                    }
                    
                }
            break;

            case "ArrowUp":
                if (game[personaje.x - 1][personaje.y] !== 1 && game[personaje.x - 1][personaje.y] !== 3) {
                    cogerCiclo(game[personaje.x - 1][personaje.y]);
                    if([10, 11, 12, 13, 14, 15, 16].indexOf(game[personaje.x - 1][personaje.y]) >= 0){
                        game[personaje.x][personaje.y] = 2; 
                        personaje.x -= 1;
                        game[personaje.x][personaje.y] = 4;
                        matarPersonaje();
                    }
                    else{
                        personaje.dir = "personaje-up";
                        game[personaje.x][personaje.y] = 2; 
                        personaje.x -= 1;
                        game[personaje.x][personaje.y] = 4;
                        drawJugador();
                    }
                }
            break;

            case "ArrowDown":
                if (game[personaje.x + 1][personaje.y] !== 1 && game[personaje.x + 1][personaje.y] !== 3) {
                    cogerCiclo(game[personaje.x + 1][personaje.y]);
                    if([10, 11, 12, 13, 14, 15, 16].indexOf(game[personaje.x + 1][personaje.y]) >= 0){
                        game[personaje.x][personaje.y] = 2; 
                        personaje.x += 1;
                        game[personaje.x][personaje.y] = 4;
                        matarPersonaje();
                    }
                    else{
                        personaje.dir = "personaje-down";
                        game[personaje.x][personaje.y] = 2; 
                        personaje.x += 1;
                        game[personaje.x][personaje.y] = 4;
                        drawJugador();
                    }
                    
                }
            break;

            case "Space":
                if (bomba.estado === 'off') {
                    game[personaje.x][personaje.y] = 5;
                    bomba.x = personaje.x;
                    bomba.y = personaje.y;
                    bomba.estado = 'on';
                    
                    setTimeout(function(e) {
                        ponerBomba(bomba)
                    }, 2000);
                    drawMapa();
                }
            break;

            case "KeyM":
                sonarMusica();
            break;
        } 
        }
        
    }

    function ponerBomba(bomba){
        let topeDerecha = false;
        let topeIzquierda = false;
        let topeArriba = false;
        let topeAbajo = false;

        for (let i = 1; i <= bomba.rango; i++) {

            if (topeDerecha === false){
                if(game[bomba.x][bomba.y + i] === 2 || game[bomba.x][bomba.y + i] === 3 || game[bomba.x][bomba.y + i] === 4){
                    if(game[bomba.x][bomba.y + i] === 4){
                        matarPersonaje();
                    }
                    if(i === 1){
                        game[bomba.x][bomba.y + i] = 11;
                    }
                    else if(i === 2){
                        game[bomba.x][bomba.y + i] = 16;
                    }
                }else{
                    topeDerecha = true;
                }
            }

            if (topeIzquierda === false){
                if (game[bomba.x][bomba.y - i] === 2 || game[bomba.x][bomba.y - i] === 3 || game[bomba.x][bomba.y - i] === 4){
                    if(game[bomba.x][bomba.y - i] === 4){
                        matarPersonaje();
                    }
                    if(i === 1){
                        game[bomba.x][bomba.y - i] = 11;
                    }
                    else if(i === 2){
                        game[bomba.x][bomba.y - i] = 15;
                    }
                }else{
                topeIzquierda = true;
                }
            }

            if (topeArriba === false){
                if (game[bomba.x - i][bomba.y] === 2 || game[bomba.x - i][bomba.y] === 3 || game[bomba.x - i][bomba.y] === 4){
                    if(game[bomba.x - i][bomba.y] === 4){
                        matarPersonaje();
                    }
                    if(i === 1){
                        game[bomba.x - i][bomba.y] = 12;
                    }
                    else if(i === 2){
                        game[bomba.x - i][bomba.y] = 13;
                    }
                }else{
                    topeArriba = true;
                }
            }

            if (topeAbajo === false){
                if (game[bomba.x + i][bomba.y] === 2 || game[bomba.x + i][bomba.y] === 3 || game[bomba.x + i][bomba.y] === 4){
                    if(game[bomba.x + i][bomba.y] === 4){
                        matarPersonaje();
                    }
                    if(i === 1){
                        game[bomba.x + i][bomba.y] = 12;
                    }
                    else if(i === 2){
                        game[bomba.x + i][bomba.y] = 14;
                    }
                }else{
                    topeAbajo = true;
                }
            }
        }

        if(bomba.x === personaje.x && bomba.y === personaje.y){
            matarPersonaje();
        }

        audioExplosion.play();
        game[bomba.x][bomba.y] = 10;
        bomba.estado = 'off';
        
        drawMapa();

        setTimeout(function(e) {
            borrarExplosion()
        }, 500);
    }

    function matarPersonaje(){
        personaje.isVivo = false;
        personaje.dir = 'personaje-muerto';
        drawJugador();
        gameOver = true;
        /*texto = "Has perdido";
        document.getElementById("modal-texto").innerHTML = texto;
        modal.style.display = "block";*/
        clearInterval(tempo);
        borrarMapa();
        //subirDatos(puntuacion, tiempoTotal);
    }

    function borrarExplosion(){
        for (var i = 0; i < game.length; i++) {
            for (var j = 0; j < game[i].length; j++) {
                switch(game[i][j]){
                    case 10:
                        game[i][j] = 2;
                    break;

                    case 11:
                        game[i][j] = 2;
                    break;

                    case 12:
                        game[i][j] = 2;
                    break;

                    case 13:
                        game[i][j] = 2;
                    break;

                    case 14:
                        game[i][j] = 2;
                    break;

                    case 15:
                        game[i][j] = 2;
                    break;

                    case 16:
                        game[i][j] = 2;
                    break;
                }
            }
        }
        drawMapa();
    }


    function borrarMapa(){
        var game = [
            [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
            [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2]
        ];

        var html = "";
        var gameMap = document.getElementById("game");
        for (var i = 0; i < game.length; i++) {
            for (var j = 0; j < game[i].length; j++) {
                switch(game[i][j]){

                    case 1:
                        html += "<div class='wall'></div>";
                    break;

                    case 2:
                        html += "<div class='vacio'></div>";
                    break;
                }
            }
            html += "</br>";
        }
    gameMap.innerHTML = html;
    }
    /*----------------TIMER----------------*/

        var anchoBarra = 0;
        var minuto = 1;
        var segundos = 30;
        var cero = "";
        var tiempoTotal = 0;

        document.getElementById("timer").innerHTML = minuto + ":" + segundos;

        var tempo = setInterval(function(e){
            if(segundos > 0 && segundos < 11){
                cero = 0;
            }
            anchoBarra += 1;
            document.getElementById("timerBarra").style.width = anchoBarra + "px";
            segundos -= 1;
            document.getElementById("timer").innerHTML = minuto  + ":" + cero + segundos;
            
            if (segundos == 0){
                if(minuto == 1){
                    segundos=60;
                    minuto=0;
                    cero = "";
                }
                else{
                    clearInterval(tempo);
                    gameOver = true;
                    matarPersonaje();
                }
            }    
            tiempoTotal++;
        }, 1000);

        /*---------------------------------------------*/

    function sonarMusica(){
        switch(musicaAux){
            case 'off':
                musica.play();
                musicaAux = 'on';
            break;
    
            case 'on':
                musica.pause();
                musicaAux = 'off';
            break;
        }
    }

    function redireccionar(){
        window.location="ranking.php";

    }

    function subirDatos(puntuacion, tiempoTotal){
        
        var datos = {
            method: 'POST',
            body: JSON.stringify({puntos: puntuacion, tiempo: tiempoTotal})
        }

        fetch('./php/subirDatos.php', datos)
        .then(response => redireccionar());

    }

    var modal = document.getElementById("myModal");
    var texto = "";