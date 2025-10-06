<?php
echo "<h2>Ejercicio 3: isset()</h2>";

// 3 valores que devuelven VERDADERO
$a = 10;
$b = "";
$c = false;

echo "<p><b>Valores verdaderos (isset() == true):</b></p>";
echo "<ul>";
echo "<li>isset(\$a): " . (isset($a) ? 'true' : 'false') . "</li>";
echo "<li>isset(\$b): " . (isset($b) ? 'true' : 'false') . "</li>";
echo "<li>isset(\$c): " . (isset($c) ? 'true' : 'false') . "</li>";
echo "</ul>";

// 3 valores que devuelven FALSO
$d = null;
unset($e);

echo "<p><b>Valores falsos (isset() == false):</b></p>";
echo "<ul>";
echo "<li>isset(\$d): " . (isset($d) ? 'true' : 'false') . "</li>";
echo "<li>isset(\$e): " . (isset($e) ? 'true' : 'false') . "</li>";
echo "<li>isset(\$f): " . (isset($f) ? 'true' : 'false') . "</li>";
echo "</ul>";
?>
