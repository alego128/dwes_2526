<?php

$nombre = "Juan";
$apellidos = "Pérez García";
$poblacion = "Madrid";
$edad = 21;
$ciclo = "Desarrollo de Aplicaciones Web";
$curso = "2º";
$modulo = "Programación";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha del Estudiante</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Ficha del Estudiante</h1>
    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo $apellidos; ?></td>
        </tr>
        <tr>
            <td>Población</td>
            <td><?php echo $poblacion; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad; ?></td>
        </tr>
        <tr>
            <td>Ciclo</td>
            <td><?php echo $ciclo; ?></td>
        </tr>
        <tr>
            <td>Curso</td>
            <td><?php echo $curso; ?></td>
        </tr>
        <tr>
            <td>Módulo</td>
            <td><?php echo $modulo; ?></td>
        </tr>
    </table>
</body>
</html>
