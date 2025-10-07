<?php

    /* 
    Ejemplo 2.6
    Alejandro González Román
    Uso de variables no definidas
    */

    $var1 = 100;
    $var3 = 200 + $var2;
    echo $var3; // muestra 200
    $var3 = 100 * $var2;
    echo $var3; //muestra 0
?>