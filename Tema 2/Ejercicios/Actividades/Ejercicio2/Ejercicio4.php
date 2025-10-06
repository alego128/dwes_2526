<?php
echo "<h2>Ejercicio 4: empty()</h2>";

// 3 valores que devuelven VERDADERO
$a = 0;
$b = "";
$c = null;

echo "<p><b>Valores verdaderos (empty() == true):</b></p>";
echo "<ul>";
echo "<li>empty(\$a): " . (empty($a) ? 'true' : 'false') . "</li>";
echo "<li>empty(\$b): " . (empty($b) ? 'true' : 'false') . "</li>";
echo "<li>empty(\$c): " . (empty($c) ? 'true' : 'false') . "</li>";
echo "</ul>";

// 3 valores que devuelven FALSO
$d = 1;
$e = "Hola";
$f = [10, 20];

echo "<p><b>Valores falsos (empty() == false):</b></p>";
echo "<ul>";
echo "<li>empty(\$d): " . (empty($d) ? 'true' : 'false') . "</li>";
echo "<li>empty(\$e): " . (empty($e) ? 'true' : 'false') . "</li>";
echo "<li>empty(\$f): " . (empty($f) ? 'true' : 'false') . "</li>";
echo "</ul>";
?>
