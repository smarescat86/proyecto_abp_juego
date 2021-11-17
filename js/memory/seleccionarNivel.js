let ciclo = localStorage.ciclo;

switch (ciclo) {
    case 'comercio':
        document.getElementById('niveles').innerHTML =
            '<button type="button" class="btn btn-primary btn-sm">Modo Fácil comercio</button>' +
            '<button type="button" class="btn btn-primary btn-sm">Modo Difícil comercio</button>';
        break;
    case 'turismo':
        document.getElementById('niveles').innerHTML =
            '<button type="button" class="btn btn-primary btn-sm">Modo Fácil turismo</button>' +
            '<button type="button" class="btn btn-primary btn-sm">Modo Difícil turismo</button>';
        break;
    case 'comunicion':
        document.getElementById('niveles').innerHTML =
            '<button type="button" class="btn btn-primary btn-sm">Modo Fácil comunicacion</button>' +
            '<button type="button" class="btn btn-primary btn-sm">Modo Difícil comunicacion</button>';
        break;
    case 'gestion':
        document.getElementById('niveles').innerHTML =
            '<button type="button" class="btn btn-primary btn-sm">Modo Fácil gestion</button>' +
            '<button type="button" class="btn btn-primary btn-sm">Modo Difícil gestion</button>';
        break;
    default:
        alert('Ningun ciclo seleccionado');

}