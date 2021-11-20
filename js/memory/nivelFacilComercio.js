var backcard = 'url("../../media/salidaProfesionales/background.png")';
var imgs = ['url("../media/salidaProfesionales/Comercio/img1.png")',
    'url("../media/salidaProfesionales/Comercio/img10.png")',
    'url("../media/salidaProfesionales/Comercio/img2.png")',
    'url("../media/salidaProfesionales/Comercio/img3.png")',
    'url("../media/salidaProfesionales/Comercio/img4.png")',
    'url("../media/salidaProfesionales/Comercio/img5.png")',
    'url("../media/salidaProfesionales/Comercio/img6.png")',
    'url("../media/salidaProfesionales/Comercio/img7.png")',
    'url("../media/salidaProfesionales/Comercio/img8.png")',
    'url("../media/salidaProfesionales/Comercio/img9.png")',
    'url("../media/salidaProfesionales/Comercio/img1.png")',
    'url("../media/salidaProfesionales/Comercio/img10.png")',
    'url("../media/salidaProfesionales/Comercio/img2.png")',
    'url("../media/salidaProfesionales/Comercio/img3.png")',
    'url("../media/salidaProfesionales/Comercio/img4.png")',
    'url("../media/salidaProfesionales/Comercio/img5.png")',
    'url("../media/salidaProfesionales/Comercio/img6.png")',
    'url("../media/salidaProfesionales/Comercio/img7.png")',
    'url("../media/salidaProfesionales/Comercio/img8.png")',
    'url("../media/salidaProfesionales/Comercio/img9.png")'
];

var adre_anterior = "";
var adre_actual = "";
var ultim_click = "0";
// variable para esperar devirar hasta virar una nueva carta
var function_permission = true;
var score = 0;
var fails = 0;
var levelnum = 20;

function canviar_imatge(adre) {
    if ((adre_anterior = "" || adre_actual.id != adre.id) && ultim_click != 2) {
        // solo vay cambiar imagenes si estan todavia sin parells  ( sin borda )
        if (adre.style.border == "") {
            adre_anterior = adre_actual;
            adre_actual = adre;
            if (adre.style.backgroundImage == backcard) {
                adre.style.backgroundImage = imatge_element(adre);
            } else {
                adre.style.backgroundImage = backcard;
            }
            ultim_click++;
            if (ultim_click == "2") {
                if (adre_actual.style.backgroundImage == adre_anterior.style.backgroundImage &&
                    adre_actual.style.backgroundImage != backcard &&
                    adre_actual.id != adre_anterior.id
                ) {
                    adre_actual.style.border = "thick solid #0000FF";
                    adre_anterior.style.border = "thick solid #0000FF";
                    score++;
                    document.getElementById('score').innerHTML = "Score: " + score;
                } else {
                    setTimeout(function() {
                        adre_anterior.style.backgroundImage = backcard;
                        adre_actual.style.backgroundImage = backcard;
                    }, 400);
                    fails++;
                    document.getElementById('miss').innerHTML = "Fails: " + fails;
                }
                ultim_click = "0";
            }
        }
    }

}

function canviar_1s(adre) {
    if (adre.style.border == "") {
        if (adre.style.backgroundImage == backcard) {
            adre.style.backgroundImage = imatge_element(adre);
        }
        setTimeout(function() {
            adre.style.backgroundImage = backcard;
        }, 200);
    }
}


function imatge_element(adre) {
    adre_actual.style.backgroundImage = imgs[adre.id.substring(1, 3) - 1];
}

// Fisher-Yates Shuffle
function shuffle(array) {
    var currentIndex = array.length,
        temporaryValue, randomIndex;
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}

function carregaDivs(dif) {
    wrapper = document.getElementById("wrapper");
    for (var i = 0; i < levelnum; i++) {
        wrapper.innerHTML += '<div class="card" id="d' + i + '"' +
            'onclick="canviar_imatge(this)" ' +
            'ondblclick="canviar_1s(this)">' +
            '</div>'
    }
}

function Ini(nom) {
    imgs = shuffle(imgs);
    var i = 1;
    while (i < levelnum + 1) {
        nom = 'd' + i;
        document.getElementById(nom).style.backgroundImage = backcard;
        i++;
        //document.getElementById('d'+j);
    }
}