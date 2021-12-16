const SOPA_DE_LLETRES = "sopaDeLletres",BOMBERMAN = "bomberman", TRILE = "trile", MEMORY = "memory";

var navButtons = document.getElementsByClassName("nav-link");

var divTablaSopaDeLletres = document.getElementById("divTablaSopaDeLletres");
var divTablaBomberman = document.getElementById("divTablaBomberman");
var divTablaTrile = document.getElementById("divTablaTrile");
var divTablaMemory = document.getElementById("divTablaMemory");


for(let i = 0; i < navButtons.length; i++) {
    navButtons[i].addEventListener("click",function() {
        clickNavButton(navButtons[i]);
    });
}

function clickNavButton(navButton) {

    let navButtonVisible = document.getElementsByClassName("nav-link visible");
    
    switch(navButtonVisible[0].name) {
        case SOPA_DE_LLETRES:
            divTablaSopaDeLletres.style.display = "none";
            navButtons[0].className  = "nav-link";
            break;
        case BOMBERMAN:
            divTablaBomberman.style.display = "none";
            navButtons[1].className  = "nav-link";
            break;
        case TRILE:
            divTablaTrile.style.display = "none";
            navButtons[2].className  = "nav-link";
            break;
        case MEMORY:
            divTablaMemory.style.display = "none";
            navButtons[3].className  = "nav-link";
            break;

    }

    switch(navButton.name) {
        case SOPA_DE_LLETRES:
            divTablaSopaDeLletres.style.display = "block";
            navButtons[0].className  = "nav-link visible";
            break;
        case BOMBERMAN:
            divTablaBomberman.style.display = "block";
            navButtons[1].className  = "nav-link visible";
            break;
        case TRILE:
            divTablaTrile.style.display = "block";
            navButtons[2].className  = "nav-link visible";
            break;
        case MEMORY:
            divTablaMemory.style.display = "block";
            navButtons[3].className  = "nav-link visible";
            break;

    }

}