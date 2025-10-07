<?php

    /* 
    Ejemplo 2.7
    Alejandro González Román
    Funciones strval, intval, floatval
    */

    $valor = 123.45;

    // strval: convierte el valor a cadena
    $cadena = strval($valor);
    echo "strval: " . $cadena . "<br>";

    // intval: convierte el valor a entero
    $entero = intval($valor);
    echo "intval: " . $entero . "<br>";

    // floatval: convierte el valor a flotante
    $flotante = floatval($valor);
    echo "floatval: " . $flotante . "<br>";

?>