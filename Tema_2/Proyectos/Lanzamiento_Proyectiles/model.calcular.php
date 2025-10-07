<?php
define("G", 9.8);

// Capturar datos del formulario
$vo = isset($_POST['vo']) ? floatval($_POST['vo']) : 0;
$anguloGrados = isset($_POST['angulo']) ? floatval($_POST['angulo']) : 0;

// Cálculos
$anguloRadianes = deg2rad($anguloGrados);
$vox = $vo * cos($anguloRadianes);
$voy = $vo * sin($anguloRadianes);
$xmax = pow($vo, 2) * sin(2 * $anguloRadianes) / G;
$ymax = pow($voy, 2) / (2 * G);
$t = (2 * $voy) / G;

// Incluir la vista de resultados (ruta relativa desde este archivo)
include __DIR__ . '/View/resultados.view.php';
?>
