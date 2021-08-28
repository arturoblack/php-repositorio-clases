

function hola() {
    alert("Hola mundo");
}

function cambiaColor() {
    var els = document.getElementsByClassName('titulo');
    for (let index = 0; index < els.length; index++) {
        const element = els[index];
        element.style.color = 'blue';
    }
}