<?php

function nombreDeLaFuncion($parametroDeEntrada) { // indican el inicio 
    $parametroDeSalida = 8;
    return $parametroDeSalida;
} // indical el fin

$respuesta = nombreDeLaFuncion(4);
echo $respuesta;
echo "\n------------\n";
function suma($n1, $n2) {
    $res = $n1 + $n2;
    return $res;
}
$respuesta2 = suma(2, 3);
echo $respuesta2;
function saludar() {
    echo "hola";
}

?>