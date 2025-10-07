<?php
echo "<h2>Ejercicio 1: Conversiones de datos en expresiones</h2>";

//Multiplica valor entero con una cadena que contiene un número inicial
$entero = 10;
$cadena_num = "5 manzanas";
$resultado1 = $entero * $cadena_num;
echo "<p><b>1. Multiplicación entero * cadena numérica:</b><br>";
echo "Expresión: 10 * '5 manzanas'<br>";
echo "Resultado: $resultado1<br>";
echo "Tipo de dato: " . gettype($resultado1) . "</p>";

//Sumar valor entero con cadena con número inicial
$resultado2 = $entero + $cadena_num;
echo "<p><b>2. Suma entero + cadena numérica:</b><br>";
echo "Expresión: 10 + '5 manzanas'<br>";
echo "Resultado: $resultado2<br>";
echo "Tipo de dato: " . gettype($resultado2) . "</p>";

//Sumar valor entero con valor float
$float = 3.7;
$resultado3 = $entero + $float;
echo "<p><b>3. Suma entero + float:</b><br>";
echo "Expresión: 10 + 3.7<br>";
echo "Resultado: $resultado3<br>";
echo "Tipo de dato: " . gettype($resultado3) . "</p>";

//Concatenar valor entero con cadena
$cadena = " perros";
$resultado4 = $entero . $cadena;
echo "<p><b>4. Concatenación entero . cadena:</b><br>";
echo "Expresión: 10 . ' perros'<br>";
echo "Resultado: $resultado4<br>";
echo "Tipo de dato: " . gettype($resultado4) . "</p>";

//Sumar valor entero con valor booleano
$booleano = true;
$resultado5 = $entero + $booleano;
echo "<p><b>5. Suma entero + booleano:</b><br>";
echo "Expresión: 10 + true<br>";
echo "Resultado: $resultado5<br>";
echo "Tipo de dato: " . gettype($resultado5) . "</p>";
?>
