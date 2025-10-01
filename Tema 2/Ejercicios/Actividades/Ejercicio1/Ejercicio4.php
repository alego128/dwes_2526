<?php

$numeroFloat = 5.5;
$numeroInt = 2;

$suma = $numeroFloat + $numeroInt;
$resta = $numeroFloat - $numeroInt;
$division = $numeroFloat / $numeroInt;
$producto = $numeroFloat * $numeroInt;
$potencia = $numeroFloat ** $numeroInt; 

echo "<h2>Resultados de las operaciones:</h2>";

echo "<p>Suma: ";
var_dump($suma);
echo "</p>";

echo "<p>Resta: ";
var_dump($resta);
echo "</p>";

echo "<p>División: ";
var_dump($division);
echo "</p>";

echo "<p>Producto: ";
var_dump($producto);
echo "</p>";

echo "<p>Potencia: ";
var_dump($potencia);
echo "</p>";
?>
