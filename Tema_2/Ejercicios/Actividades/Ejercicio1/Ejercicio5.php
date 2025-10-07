<?php
echo "<h2>Información</h2>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de PHP</title>
    <style>
        body {
            text-align: center;
        }
        .phpinfo-container {
            display: inline-block;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Información de PHP</h1>
    <div class="phpinfo-container">
        <?php
        phpinfo();
        ?>
    </div>
</body>
</html>
