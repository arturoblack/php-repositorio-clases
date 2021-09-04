

function hola() {
    alert("Hola mundo");
}

function suma(n1, n2) {
    return n1 + n2;
}

function cambiaColor() {
    var els = document.getElementsByClassName('titulo');
    for (let index = 0; index < els.length; index++) {
        const element = els[index];
        element.style.color = 'blue';
    }
}

function toRectangulo() {
    const cuadrado = document.getElementById("cuadrado");
    cuadrado.style.width = '200px'
}

function toCuadrado() {
    const cuadrado = document.getElementById("cuadrado");
    cuadrado.style.width = '100px'
}