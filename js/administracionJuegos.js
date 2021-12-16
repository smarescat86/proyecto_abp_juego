/*var numbers = document.getElementsByClassName("numberIcon");

for(let i = 0; i < numbers.length; i++) {
    numbers[i].addEventListener("click",function() {
        clickNumber(numbers[i]);
    });
}

function clickNumber(numberBlackSelected) {
    if(numberBlackSelected.className.includes("black")) {

        let numberGreen = document.getElementsByClassName("seleccionadoNumber green");
        let idSplit = numberGreen[0].id.split("g");

        let id = idSplit[0] + "black";
        let numberBlack = document.getElementById(id);
        numberBlack.className = "numberIcon seleccionadoNumber black";

        let idDiv = idSplit[0] + "div";
        let divNumber = document.getElementById(idDiv);
        divNumber.className = "divNumber";

        numberGreen[0].className = "numberIcon green";



        let idSplitSelected = numberBlackSelected.id.split("b");
        let idSelected = idSplitSelected[0] + "green";
        let numberGreenSelected = document.getElementById(idSelected);
        numberGreenSelected.className = "numberIcon seleccionadoNumber green";

        let idDivSelected = idSplitSelected[0] + "div";
        let divNumberSelected = document.getElementById(idDivSelected);
        divNumberSelected.className = "divNumber seleccionadoDiv";

        numberBlackSelected.className = "numberIcon black";
        
        let a = 4;
        //numberSelected[0].className = "numberIcon green";
        
        //let id = idSplit[0] + "Black";

    }

    
    

}
*/

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