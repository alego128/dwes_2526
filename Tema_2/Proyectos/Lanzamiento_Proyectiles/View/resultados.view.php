<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Lanzamiento Proyectiles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <div class="card shadow p-4">
        <h1 class="display-5 mb-4">Lanzamiento Proyectiles</h1>
        <h5>Examen Práctico - 01 - Tema 2 - DWES 20/21</h5>
        <hr>

        <table class="table table-striped">
            <tr><th colspan="2">Valores Iniciales:</th></tr>
            <tr><td>Velocidad Inicial:</td><td><?= number_format($vo, 2) ?> m/s</td></tr>
            <tr><td>Ángulo de Inclinación:</td><td><?= $anguloGrados ?> °</td></tr>

            <tr><th colspan="2">Resultados:</th></tr>
            <tr><td>Ángulo en Radianes:</td><td><?= number_format($anguloRadianes, 5) ?> Radianes</td></tr>
            <tr><td>Velocidad Inicial X:</td><td><?= number_format($vox, 2) ?> m/s</td></tr>
            <tr><td>Velocidad Inicial Y:</td><td><?= number_format($voy, 2) ?> m/s</td></tr>
            <tr><td>Alcance Máximo del Proyectil:</td><td><?= number_format($xmax, 2) ?> m</td></tr>
            <tr><td>Tiempo de Vuelo del Proyectil:</td><td><?= number_format($t, 2) ?> s</td></tr>
            <tr><td>Altura Máxima del Proyectil:</td><td><?= number_format($ymax, 2) ?> m</td></tr>
        </table>

        <a href="/Tema_2/Proyectos/Lanzamiento_Proyectiles/index.php" class="btn btn-primary">Volver</a>
    </div>

</body>
</html>
