<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</title>

    <!-- Bootstrap css 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Bootstrap Icons 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- Capa Principal -->
    <div class="container">

        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>        
            <span class="fs-3">Proyecto 2.2 - Cálculo Lanzamiento de Proyectiles</span>
        </header>

        <main>
            <h1>Lanzamiento Proyectiles</h1>
            <!--Velocidad inicial -->
            <div  class="mb-3">
                <label for="velInicial" class="form-label" for="velocidad_inicial">Velocidad Inicial:</label>
                <input type="number" step="1" name="velocidad_inicial" class="form-control" id="velInicial" placeholder="0" aria-describedby="helpId">
                <small id ="helpId" class=" text-muted">Velocidad en (m/s)</small>
            </div>      
                
            <!-- Ángulo de Lanzamiento -->
            <div  class="mb-3">
                <label for="velInicial" class="form-label" for="angulo_lanzamiento">Ángulo de Lanzamiento:</label>
                <input type="number" step="1" name="angulo_lanzamiento" class="form-control" id="velInicial" placeholder="0" aria-describedby="helpId">
                <small id ="helpId" class=" text-muted">Ángulo en grados</small>
            </div>

            <div class="btn-group" role="group">
                <buttton type="reset" class="btn btn-secondary">Borrar</buttton>
                <buttton type="submit" class="btn btn-warning" formaction="calcular.php">Calcular</button>
            </div>


        </main>
    </div>

    </main>
    <!-- Pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2025 Alejandro González - DWES - 2º DAW - Curso 25/26</span>
        </div>
    </footer>

     <!-- Bootstrap Javascript y popper 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>