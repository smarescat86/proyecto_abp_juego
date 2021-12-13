var numbers = document.getElementsByClassName("numberIcon");

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