var statisticButton = document.getElementById("statisticButton");

var containerStatistic = document.getElementById("containerStatistic");


statisticButton.addEventListener("click",visibleItemsStatistic);

function visibleItemsStatistic() {

    containerStatistic.style.display = "block";

}

var buttonBackStatistic = document.getElementById("buttonBackStatistic");

buttonBackStatistic.addEventListener("click",hiddenItemsStatistic);

function hiddenItemsStatistic() {
    containerStatistic.style.display = "none";

}