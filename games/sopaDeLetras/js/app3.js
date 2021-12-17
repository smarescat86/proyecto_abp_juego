document.addEventListener('DOMContentLoaded', init);

let myWords;
let game;
let placedWords;
let validSelectedLetters;
let charsSelected;
let totalWordsFound;
let seconds;
let score;
let gridSize;
let intervalTimer;
let stopCrono;

let audio = new Audio('./media/music/music.ogg');
audio.loop = true;

function initVariables() {
    myWords = ['flexibilidad', 'responsabilidad', 'autonomia', 'sociabilidad', 'evolucion'];
    game = {r:0, c:0, w:25, x:'', y:'', arr:[]};
    placedWords = [];
    validSelectedLetters = [];
    charsSelected = [];
    totalWordsFound = 0;  
    seconds = 120;
    score = 0;
    gridSize = 15;
    intervalTimer = null;
    stopCrono = false;
}

function getHtmlElements() {
    //Rerefencias de los elementos HTML
    return {
        gameArea: document.getElementById('gameArea'),
        gridContainer: document.getElementById('gridContainer'),
        myListWords: document.getElementById('myListWords'),
        countDown: document.getElementById('countDown'),
        divScore: document.getElementById('score'),
        game: document.getElementById('game'),
        myModal: new bootstrap.Modal(document.getElementById('modal-word-description'), {keyboard: false}),
        gameResult: document.getElementById('game-result'),
        scoreBoard: document.getElementById('scoreBoard'),
        finalText: document.getElementById('finalText'),
        finalButtons: document.getElementById('finalButtons'),
        playAgain: document.getElementById('play-again'),
        exitGame: document.getElementById('exit-game'),
        gameContainer: document.getElementById('game-container'),
        startingSecondsContainer: document.getElementById('starting-seconds-container'),
        startingSeconds: document.getElementById('starting-seconds'),
        btnStart: document.getElementById('btnStart'),
        gameTitle: document.getElementById('game-title'),
        cuerpo: document.getElementById('cuerpo')
    }
}

function init() {
    elements = getHtmlElements();
    elements.gameContainer.style.display = 'none';
    elements.gameResult.style.display = 'none';
    elements.btnStart.style.display = 'none';

    elements.btnStart.addEventListener('click', () => {
        timerStart(elements);
    });

    showGameTitle(elements);

    //Despues de 4.5 segundos mostramos el boton start
    let interval = setInterval( () => {
                      elements.btnStart.style.display = 'block';
                      clearInterval(interval);
                   }, 4500 );
}

function removeElements(elements) {
    elements.forEach(el => el.remove());
}

function startGame(elements) {
    audio.play();
    elements.gameContainer.style.display = 'block';
    elements.game.classList.add('start-animation');
    removeElements(document.querySelectorAll(".word"));
    initVariables();

    game.r = Number(gridSize); //rows
    game.c = Number(gridSize); //columns 
    game.x = '';
    game.y = '';
    game.arr.length = 0;
    validSelectedLetters.length = 0;
    //Multiplico las filas y columnas para saber de que tamaño del tablero
    game.arr.length = game.r * game.c;
    placedWords.length = 0;

    //Cargo el array con la cantidad de celdas
    //Luego lo utilizo el array en la funcion buildTable para crear el tablero.
    for(let i=0; i<game.arr.length; i++){
        game.arr[i] = '-';
    }

    //Automatizamos la grid con las columnas y filas en el archivo de style.css .gridContainer

    /* for(let xx=0; xx<game.r; xx++){
        game.x += ' auto ';
    }
    for(let yy=0; yy<game.r; yy++){
        game.y += ' auto ';
    } */
    //Agregamos la cantidad de filas y columnas en el archivo style.css en la clase girdContainer
    gridContainer.style.gridTemplateColumns = `repeat(${gridSize}, 1fr)`;
    gridContainer.style.gridTemplateRows = `repeat(${gridSize}, 1fr)`;

    //Agregamos las palabras en la grid, cada letra en una celda.
    myWords.forEach((word, index)=>{
        let letterWordPosition = placeWord(word);
        if(letterWordPosition) {
            //Cargo en un array las palabras que estan en el tablero con los repectivos lugares de cada letra.
            placedWords.push({word, letterWordPosition});
        }
    });
    addLetters();
    buildTable();
    startTimer();
    addScore();
    addListeners(elements);
    
    //Mostrar palabras a encontrar
    placedWords.forEach(element => {
        element.ele = document.createElement('div');
        element.ele.classList.add('word');
        element.ele.textContent = element.word;
        element.ele.arr = element.position;
        myListWords.append(element.ele);
    });
}

function addListeners(elements) {
    elements.playAgain.addEventListener('click', () => {
        elements.gameResult.style.display = 'none';
        elements.gameContainer.style.display = 'block';
        stopTimer();
        audio.pause();
        startGame(elements);
        //elements.startingSecondsContainer.style.display = 'block';
    });

    elements.exitGame.addEventListener('click', () => {
        location.reload();
    });
}

function addLetters() {
    for(let i = 0; i < game.arr.length; i++) {
        if(game.arr[i] == '-') {
            game.arr[i] = randomLetter().toUpperCase();
        }
    }
}
function randomLetter() {
    let abc = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    return abc[Math.floor(Math.random() * abc.length)];
}

//Devuelve un array con todas las posiciones de las letras de cada palabra colocadas en el tablero
//Estos arrays vienen de las funciones xPlace e yPlace
function placeWord(word) {
    let placedOkay = false;
    let count = 300;
    word = (Math.random() > 0.5) ? word : word.split('').reverse().join('');
    while(!placedOkay && count > 0) {
        count--;
        let pos = {col:0, row:0};
        let dir = (Math.random() > 0.5) ? true : false;

        //Verificar si hay espacio para agregar la palabra horizontalmente
        //Si la palabra tiene mas caracteres que columnas del tablero no se podra añadir
        if(dir && word.length <= game.c){
            //start position of the word
            //Defino las posibles posiciones de salida para las columnas y filas luego se podra seleccionar alguna
            pos.col = findStartPos(word.length, game.c);
            pos.row = Math.floor(Math.random() * game.r);
            placedOkay = xPlace(pos, word);
        } else if (!dir && word.length <= game.r) {
            pos.row = findStartPos(word.length, game.r);
            pos.col = Math.floor(Math.random() * game.c);
            placedOkay = yPlace(pos, word);
        }
    } 
    return placedOkay;
}

//vertical
function yPlace(pos, word) {
    //Transformo las coordenadas en la posiscion de inicio de la palabra en el tablero.
    let start = (pos.row * game.c) + pos.col;
    let okayCounter = 0;
    let indexPlaced = [];
     //Aqui busco en cual fila hay lugar para poner la palabra
    for (let i = 0; i < word.length; i++) {
        //Busco cuantos '-' continuos hay, para que entre la palabra
        if(game.arr[start+(i*game.c)] == '-') {
            okayCounter++;
        }
    }
    //Una vez encontrado el lugar para la palabra, aqui coloco la palabra en el tablero.
    let ok = false;
    if(okayCounter == word.length) {
        for(let i=0; i<word.length; i++){
            if(game.arr[start+(i*game.c)] == '-') {
                game.arr[start+(i*game.c)] = word[i];
                indexPlaced.push(start+(i*game.c));
            }
        }
        ok = indexPlaced;
    }
    return ok;
}

//Horizontal
function xPlace(pos, word) {
    //Transforma las coordenadas en la posiscion de inicio de la palabra en el tablero.
    let start = (pos.row * game.c) + pos.col;
    //Esta variable cuenta los espacios disponibles, cuantas letras podemos introducir
    let okayCounter = 0;
    let indexPlaced = [];
    //Aqui buscamos en cual fila hay lugar para poner la palabra
    for (let i = 0; i < word.length; i++) {
        //Busco cuantos '-' continuos hay, para que entre la palabra
        if(game.arr[start+i] == '-') {
            okayCounter++;
        }
    }
    //Una vez encontrado el lugar para la palabra, aqui colocamos la palabra en el tablero.
    let ok = false;
    if(okayCounter == word.length) {
        for(let i=0; i<word.length; i++){
            if(game.arr[start+i] == '-') {
                game.arr[start+i] = word[i];
                indexPlaced.push(start+i);
            }
        }
        ok = indexPlaced;
    }
    return ok;
}

function findStartPos(wordLength, gameColumns) {
    /*celdas disponibles para introducir la palabra. (agregamos el +1 para cubrirnos de la posicion extra que la matriz no tiene)
    Horizontal: Devuelve un numero menor a la cantidad de columnas totales. Ademas, se asegura que entre ese numero y 
    la cantidad de columnas, haya espacio suficiente para la palabra. 
    Como la matriz va de 0 a 4 y el length de la palabra es 5, entonces con el +1 nos cubrimos esa ultimo espacio.*/
    return Math.floor(Math.random()*(gameColumns - wordLength + 1))
}

function buildTable() {
    gridContainer.innerHTML = '';
    game.arr.forEach((element, index)=>{
        let div = document.createElement('div');
        div.textContent = element;
        div.classList.add('grid-item');
        div.id = index;
        gridContainer.append(div);

        let divs = document.querySelectorAll('.grid-item');
        for (const div of divs) {
            div.addEventListener('mousedown', gridItemMouseDown, false);
            div.addEventListener('mouseup', gridItemMouseUp, false);
        }
    });
}

function gridItemMouseDown(event) {
    let divs = document.querySelectorAll('.grid-item');
    let downCoordenade = transformToCoordenades(event.target.id);
    for (const div of divs) {
        div.addEventListener('mousemove', gridItemMouseMove, false);
        //Agrego las cordenadas del div down a cada div para saber donde empiezo a clickear.
        div.downCoordenade = downCoordenade;
    }
    charsSelected = [];
}

function gridItemMouseMove(event) {
    const downCoordenade = event.currentTarget.downCoordenade;
    let actualCoordenade = transformToCoordenades(event.target.id);
    //Comparo la posicion down con la que estoy moviendo.
    if (downCoordenade.row == actualCoordenade.row || downCoordenade.col == actualCoordenade.col) {
        event.target.classList.add('bg-grey');
        charsSelected.push(parseInt(event.target.id)); 
    }
}

function gridItemMouseUp(event) {
    let divs = document.querySelectorAll('.grid-item');
    
    for (const div of divs) {
        div.removeEventListener('mousemove', gridItemMouseMove, false);
        div.classList.remove('bg-grey');
    }

    //Quito los repetidos seleccionados
    charsSelected = charsSelected.filter((value, index) => charsSelected.indexOf(value) === index);

    let wordFound = false;
    i = 0;
    while(i < placedWords.length && !wordFound) {
        word = placedWords[i].letterWordPosition;
        if(word.length == charsSelected.length) {
            if(wordIncludes(word, charsSelected).length == word.length) {
                wordFound = placedWords[i];
            }
        }
        i++;
    }
    if(wordFound != false) {
        console.log(charsSelected);
        for (let i = 0; i < charsSelected.length; i++) {
            let div = document.getElementById(charsSelected[i]);
            div.classList.add('bg-green');

            //Quito los eventos para que no se puede volver a marcar la palabra
            div.removeEventListener('mousedown', gridItemMouseDown, false);
            div.removeEventListener('mousemove', gridItemMouseMove, false);
            div.removeEventListener('mouseup', gridItemMouseUp, false);
        }
        markWord(wordFound);
        totalWordsFound++;
        score += 100;
        addScore();
    }
    
}

//Compara si la palabra marcada coincide con las que tiene que encontrar.
//retorna el array con las posiciones de la palabra
function wordIncludes(wordA, wordB) {
    wordMatch = [];
    for (let i = 0; i < wordB.length; i++) {
        if(wordA.includes(wordB[i])) {
            wordMatch.push(word[i]);
        }
    }
    return wordMatch;
}

function markWord(word) {
    word.ele.classList.add('mark-word'); 

    let myModal = document.getElementById('modal-word-description');
    let modalBody = myModal.querySelector('.modal-body');

    if(word.word == 'flexibilidad') {
        //Abre modal
        myModal.addEventListener('show.bs.modal', function (event) {
            let modalTitle = myModal.querySelector('.modal-title');
            modalTitle.textContent = 'Flexibilidad';
            stopCrono = true;
          });

          //Cierra modal
          myModal.addEventListener('hidden.bs.modal', function (event) {
            modalBody.textContent = '';
            stopCrono = false;

            gameOver();

          });

            const textFlexibility = 'Para nosotros la flexibilidad es disponer de diferentes rutas de trabajo y sobre todo disfrutar de los diferentes espacios de trabajo y ritmos de aprendizaje.';
            //animateWriter(modalBody, textFlexibility);
            modalBody.textContent = textFlexibility;
            elements.myModal.show();

    } else if (word.word == 'responsabilidad') {
        //Abre modal
        myModal.addEventListener('show.bs.modal', function (event) {
            let modalTitle = myModal.querySelector('.modal-title');
            modalTitle.textContent = 'Responsabilidad';
            stopCrono = true;
          });

          //Cierra modal
          myModal.addEventListener('hidden.bs.modal', function (event) {
            modalBody.textContent = '';
            stopCrono = false;

            gameOver();
          });

            const textResponsability = 'La responsabilidad es saber gestionar el aprendizaje sobre el camino propio, ritmos de trabajo (objetivos, progresos, constancia).';
            //animateWriter(modalBody, textResponsability);
            modalBody.textContent = textResponsability;
            elements.myModal.show();

    } else if (word.word == 'autonomia') {
        //Abre modal
        myModal.addEventListener('show.bs.modal', function (event) {
            let modalTitle = myModal.querySelector('.modal-title');
            modalTitle.textContent = 'Autonomia';
            stopCrono = true;
          });

          //Cierra modal
          myModal.addEventListener('hidden.bs.modal', function (event) {
            modalBody.textContent = '';
            stopCrono = false;
          });

            const textAutonomy = 'La autonomia para nosotros es: no tener miedo a cometer errores, trabajar la inteligencia emocional, fomentar el pensamiento analitico, la capacidad de evolucion y la automotivacion';
            //animateWriter(modalBody, textAutonomy);
            modalBody.textContent = textAutonomy;
            elements.myModal.show();

    } else if (word.word == 'sociabilidad'){
        //Abre modal
        myModal.addEventListener('show.bs.modal', function (event) {
            let modalTitle = myModal.querySelector('.modal-title');
            modalTitle.textContent = 'Sociabilidad';
            stopCrono = true;
          });

          //Cierra modal
          myModal.addEventListener('hidden.bs.modal', function (event) {
            modalBody.textContent = '';
            stopCrono = false;
          });

            const textSociability = 'La sociabilidad para nosotros es mejorar la comunicacion profesor/estudiante, aprender a recibir y dar ayuda, saber trabajar en grupos dinamicos y aprender a comunicarse en grupo.';
            //animateWriter(modalBody, textSociability);
            modalBody.textContent = textSociability;
            elements.myModal.show();

    } else if(word.word == 'evolucion') {
        //Abre modal
        myModal.addEventListener('show.bs.modal', function (event) {
            let modalTitle = myModal.querySelector('.modal-title');
            modalTitle.textContent = 'Evolucion';
            stopCrono = true;
          });

          //Cierra modal
          myModal.addEventListener('hidden.bs.modal', function (event) {
            modalBody.textContent = '';
            stopCrono = false;
          });

            const textEvolution = 'La evolucion es, disfrutar de hacer las cosas bien, sentir la necesidad de crecer, saber los conceptos estudidados, orgullo del crecimiento.';
            //animateWriter(modalBody, textEvolution);
            modalBody.textContent = textEvolution;
            elements.myModal.show();
    }
}

//Cronometro
function startTimer() {
    countDown.style.color = "white";

    intervalTimer = setInterval(() => {
        if(!stopCrono) {
            seconds--;
            displayTime(seconds);

            if (seconds == 0 || seconds < 1) {
                stopTimer();
                countDown.innerHTML = "Time is over";
                gameOver();
            }
            if(seconds <= 10) {
                countDown.style.color = 'red';
            }
        }
        
    }, 1000);
}

function stopTimer() {
    clearInterval(intervalTimer);
    intervalTimer = null;
}

function displayTime(seconds) {
    const min = Math.floor(seconds / 60);
    const sec = Math.floor(seconds % 60);
    countDown.innerHTML = `${min < 10 ? "0" : ""}${min}:${sec < 10 ? "0" : ""}${sec}`;
}

// cuenta regresiva, 3, 2, 1
function timerStart(elements) {
    let countdown = 3;
    let del = false;
    elements.btnStart.style.display = "none"; // Escondemos el boton cuando comienza el juego
    elements.startingSecondsContainer.style.display = 'block';
    elements.gameTitle.style.display = 'none';

    let internval = setInterval(() => {
        countdown--;

        if(del == true) {
            clearInterval(internval);
            elements.startingSecondsContainer.style.display = 'none';
            startGame(elements);
        }
        
        if(countdown >= 0) {
            elements.startingSeconds.innerHTML = countdown;
        }

        if(countdown === 0){
            elements.startingSeconds.innerHTML = "GO!";
            del = true;
        }
    }, 1000);

    return del;
}

function addScore(divScore) { 
    divScore = document.getElementById('score');
    divScore.innerHTML = score + ' pts';   
}

function removeMouseListeners() {
    let divs = document.querySelectorAll('.grid-item');
        for (const div of divs) {
            div.removeEventListener('mousedown', gridItemMouseDown, false);
            div.removeEventListener('mousemove', gridItemMouseMove, false);
            div.removeEventListener('mouseup', gridItemMouseUp, false);
        }
}

//La posicion de la tabla, la transforma en filas y columnas
function transformToCoordenades(posicion) {
    position = {row: 0, col:0}

        position.col = posicion % gridSize; //Columnas
        position.row = Math.floor(posicion / gridSize); //Filas

    return position;
}

// Animate functions
function showGameTitle(elements) {
    elements.gameTitle.style.display = 'flex';
    const letters = document.querySelectorAll('li');

    setTimeout(() => {
        Array.from(letters).forEach((letter, index) =>{
            setTimeout(() => {
                letter.classList.toggle("show");
            }, index * 150);
        })
    }, 300);
}

function animateWriter(modalBody, text) {
    let i = 0;
    let speed = 50;
    typeWriter(modalBody, text, speed, i);
}

function typeWriter(modalBody, text, speed, i) {
    if (i < text.length) {
        modalBody.innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter.bind(null, modalBody, text, speed, i), speed);
    }
}

function gameOver() {
    if(placedWords.length == totalWordsFound || seconds == 0) {
        removeMouseListeners();
        clearInterval(intervalTimer);

        elements.gameContainer.style.display = 'none';
        elements.finalText.textContent = seconds == 0 ? "Try again" : "¡You win!";
        elements.gameResult.style.display = 'block';
        loadDataTable();
        
        let intervalBoard = setInterval( () => {
            elements.scoreBoard.style.visibility = 'visible';
            clearInterval(intervalBoard);
            elements.finalButtons.style.visibility = 'visible';
         }, 1000 );

         if(elements.finalText.textContent == "¡You win!") {
            uploadScorePlayer();
        }
    }
}

//Cargo los datos de la tabla
function loadDataTable() {
    const opciones = {
        method: 'POST',
        body: JSON.stringify({action: 'selectPlayers'})
    }
    
    fetch('./data/bd.php', opciones)
    .then(respuesta => respuesta.json())
    .then(resultado => {
        elements.cuerpo.innerHTML = '';
        contador = 1;
        resultado.forEach(player => {
            elements.cuerpo.innerHTML += `
            <tr>
                <td>${contador}</td>
                <td>${player.nombre_usuario}</td>
                <td>${player.tiempo + 's'}</td>
                <td>${player.puntuacion}</td>
            </tr>`
            contador++;
        });
    });

}

//Actualizo el score del jugador en la base de datos
function uploadScorePlayer() {
    console.log('entra aca');
    const opciones = {
        method: 'POST',
        body: JSON.stringify({action: 'updateUser', seconds: seconds, score: score})
    }
    fetch('./data/bd.php', opciones)
    .then(() => {
        loadDataTable();
    });
}
    