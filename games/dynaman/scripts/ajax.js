function enviarPuntons(puntos) {
    let puntosAjax = puntos;

    let xhttp = new XMLHttpRequest();
    xhttp.open("GET","bd.php ? puntos = " + puntosAjax, true);
    xhttp.send();
}