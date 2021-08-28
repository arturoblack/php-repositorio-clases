<?php
    // PHP 
    // Tipado debil 
    // JIT -> Just In Time - Interpretado
    
    // Esctructuras de control
    // if -> Evalua una condicion
    $a = TRUE;
    $b = FALSE;
    if ($a) {
        echo "a es verdadero\n";
    } else {
        echo "a es falso\n";
    }
    if ($b) {
        echo "b es verdadero\n";
    } else {
        echo "b es falso\n";
    }
    //---
    if ($a && $b) {
        echo "a y b son verdaderos\n";
    } else {
        echo "a y b son falsos\n";
    }

    if ($a || $b) {
        echo "a o b son verdaderos\n";
    } else {
        echo "a o b son falsos\n";
    }

    if (!$a && $b) {
        echo "negacion de a y b son verdaderos\n";
    } else {
        echo "negacion de a y b son falsos\n";
    }

    if (!$a || $b) {
        echo "negacion de a o b son verdaderos\n";
    } else {
        echo "negacion de a o b son falsos\n";
    }
    
    $edad = 18;
    if ( $edad < 1 ) {  
        echo "Eres un bebe\n";
    } else if ( $edad < 13 ) {
        echo "Eres un niño\n";
    } else if ( $edad < 20 ) {
        echo "Eres un adolecente\n";
    } else if ( $edad < 65 ) {
        echo "Eres un adulto\n";
    } else {
        echo "Eres un adulto mayor\n";
    }
    // switch
    $color = "rojo";
    if ( $color == "rojo" ) {
        echo "El color es rojo\n";
    } else if ( $color == "azul" ) {
        echo "El color es azul\n";
    } else if ( $color == "verde" ) {
        echo "El color es verde\n";
    } else if ( $color == "amarillo" ) {
        echo "El color es amarillo\n";
    } else {
        echo "El color no es ni rojo, ni azul, ni verde, ni amarillo\n";
    }
    // con switch
    switch ( $color ) {
        case "rojo":
            echo "El color es rojo\n";
            break;
        case "azul":
            echo "El color es azul\n";
            break;
        case "verde":
            echo "El color es verde\n";
            break;
        case "amarillo":
            echo "El color es amarillo\n";
            break;
        default:
            echo "El color no es ni rojo, ni azul, ni verde, ni amarillo\n";
    }   

    // while
    $i = 0;
    // MIENTRAS el VALOR DE $i sea MENOR que 10
    // repite lo que esta dentro del bloque while { }
    while ( $i < 10 ) { 
        echo "El valor de i es $i\n";
        $i++; // $i = $i + 1;
    }
    // do while
    $i = 0;
    do {
        echo "DOWHILE: El valor de i es $i\n";
        $i++;
    } while ( $i < 10 );
    // for
    // PARA cuando i empieza en 0,
    // SI i es MENOR que 10,
    // repite lo que esta dentro del bloque for { }
    // y aumenta el valor de i en 1
    for ( $i = 0; $i < 10; $i++ ) {
        echo "FOR: El valor de i es $i\n";
    }

    // foreach
    $listaFrutas = [ "manzana", "pera", "piña", "naranja", "sandia" ];
    $nElementos = count($listaFrutas);
    for ( $i = 0; $i < $nElementos; $i++) {
        echo "La fruta en la posicion $i es ".$listaFrutas[$i]."\n";
    }

    $listaFrutas = [ "manzana", "pera", "piña", "naranja", "sandia" ];
    foreach ($listaFrutas as $item) {
        echo "FOREACH: La fruta es ".$item."\n";
    }

    $listaFrutas = [ "manzana", "pera", "piña", "naranja", "sandia" ];
    foreach ($listaFrutas as $indice => $item) {
        echo "FOREACH CON INDICE: La fruta en la posicion $indice es $item\n";
    }


?>