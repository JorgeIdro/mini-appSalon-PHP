<?php
require __DIR__ . '/includes/funciones.php'; // La primer diagonal es obligatoria
// Otra alternativa es solo poner"./includes/...", el "./" es el directorio actual

// __DIR__ nos dará la ruta de la carpeta del proyecto
// __FILE__ nos dará la ruta especifica del archivo con su extension
// echo __FILE__;

$consulta = obtener_servicios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="contenedor-estetica">
        <div class="imagen"></div>
        <div class="app">
            <header class="header">
                <h1>App Peluquería</h1>
            </header>

            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige tus Servicios a Continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php 
                        while($servicio = mysqli_fetch_assoc($consulta)) { ?> <!-- asi traemos todos los servicios, ya que si no solo extrae uno -->
                        <div class="servicio">
                            <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p> <!-- asi accedemos a nombre de la tabla de servicios -->
                            <p class="precio-servicio"><?php echo $servicio['precio']; ?></p> <!-- asi accedemos a precio de la tabla de servicios -->
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>