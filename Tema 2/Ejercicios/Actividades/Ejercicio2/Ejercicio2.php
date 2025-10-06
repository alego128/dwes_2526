<?php
echo "<h2>Ejercicio 2: is_null()</h2>";

// 3 valores que devuelven VERDADERO
$valor1 = null;
$valor2 = NULL;
$valor3;

echo "<p><b>Valores verdaderos (is_null() == true):</b></p>";
echo "<ul>";
echo "<li>is_null(\$valor1): " . (is_null($valor1) ? 'true' : 'false') . "</li>";
echo "<li>is_null(\$valor2): " . (is_null($valor2) ? 'true' : 'false') . "</li>";
echo "<li>is_null(\$valor3): " . (is_null($valor3) ? 'true' : 'false') . "</li>";
echo "</ul>";

// 3 valores que devuelven FALSO
$valor4 = 0;
$valor5 = "";
$valor6 = false;

echo "<p><b>Valores falsos (is_null() == false):</b></p>";
echo "<ul>";
echo "<li>is_null(\$valor4): " . (is_null($valor4) ? 'true' : 'false') . "</li>";
echo "<li>is_null(\$valor5): " . (is_null($valor5) ? 'true' : 'false') . "</li>";
echo "<li>is_null(\$valor6): " . (is_null($valor6) ? 'true' : 'false') . "</li>";
echo "</ul>";
?>
