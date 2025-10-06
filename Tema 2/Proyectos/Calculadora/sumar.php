<?php

if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $resultado = $valor1 + $valor2;
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="display-5 fw-bold">Resultado de la Suma</h1>
                <p class="fs-4 mt-3">El resultado de <strong><?= $valor1 ?></strong> + <strong><?= $valor2 ?></strong> es:</p>
                <h2 class="text-primary"><?= $resultado ?></h2>
                <a href="index.html" class="btn btn-secondary mt-4">Volver</a>
            </div>
        </div>
    </div>
</body>
</html>
