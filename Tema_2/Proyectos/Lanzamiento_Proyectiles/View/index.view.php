<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container mt-4">
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>        
            <span class="fs-3">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
        </header>

        <main>
            <h1 class="mb-4">Lanzamiento de Proyectiles</h1>

            <?php
            define("G", 9.8);
            $resultados = null;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $vo = floatval($_POST['vo']);
                $anguloGrados = floatval($_POST['angulo']);

                $anguloRadianes = deg2rad($anguloGrados);
                $vox = $vo * cos($anguloRadianes);
                $voy = $vo * sin($anguloRadianes);
                $xmax = pow($vo, 2) * sin(2 * $anguloRadianes) / G;
                $ymax = pow($voy, 2) / (2 * G);
                $t = (2 * $voy) / G;

                $resultados = compact('vo','anguloGrados','vox','voy','xmax','ymax','t');
            }
            ?>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="velocidad_inicial" class="form-label fw-bold">Velocidad Inicial:</label>
                    <input type="number" step="0.01" name="vo" id="velocidad_inicial" class="form-control" placeholder="Introduce la velocidad" required>
                    <small class="text-muted">Velocidad en m/s</small>
                </div>

                <div class="mb-3">
                    <label for="angulo_lanzamiento" class="form-label fw-bold">Ángulo de Lanzamiento:</label>
                    <input type="number" step="0.01" name="angulo" id="angulo_lanzamiento" class="form-control" placeholder="Introduce el ángulo" required>
                    <small class="text-muted">Ángulo en grados</small>
                </div>

                <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                    <button type="submit" class="btn btn-warning">Calcular</button>
                </div>
            </form>

            <?php if ($resultados): ?>
            <div class="mt-4 p-3 border rounded bg-light">
                <h4>Resultados:</h4>
                <p>Velocidad inicial: <?= $resultados['vo'] ?> m/s</p>
                <p>Ángulo: <?= $resultados['anguloGrados'] ?>°</p>
                <p>Velocidad horizontal: <?= round($resultados['vox'], 2) ?> m/s</p>
                <p>Velocidad vertical: <?= round($resultados['voy'], 2) ?> m/s</p>
                <p>Alcance máximo: <?= round($resultados['xmax'], 2) ?> m</p>
                <p>Altura máxima: <?= round($resultados['ymax'], 2) ?> m</p>
                <p>Tiempo total de vuelo: <?= round($resultados['t'], 2) ?> s</p>
            </div>
            <?php endif; ?>

        </main>
    </div>

    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025 Alejandro González - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
