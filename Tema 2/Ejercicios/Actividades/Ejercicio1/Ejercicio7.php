<?php

$nombre = "Alejandro";
$apellidos = "González Román";
$poblacion = "Ubrique";
$edad = 21;
$ciclo = "Desarrollo de Aplicaciones Web";
$curso = "2º";
$modulo = "Programación";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historia</title>
    <style>
        h1 {
            text-align: center;
        }
        p {
            width: 60%;
            margin: 20px auto;
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }
    </style>
</head>
<body>
    <h1>Historia</h1>

    <p>
        <?php
        echo "$nombre $apellidos vive en $poblacion y tiene $edad años. ";
        echo "Actualmente está cursando el $curso curso del ciclo de $ciclo. ";
        echo "Su módulo favorito es $modulo, donde disfruta aprendiendo y practicando nuevas habilidades de programación. ";
        echo "Con dedicación y esfuerzo, $nombre está construyendo su camino hacia una carrera exitosa en el mundo del desarrollo web.";
        ?>
    </p>

</body>
</html>
