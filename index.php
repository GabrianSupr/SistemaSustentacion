<?php
    require_once 'autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral</title>
    <?php
    
    $assetsLoader = new scriptController();
    echo $assetsLoader->getCssLinks();

    echo $assetsLoader->getFavicons();
    ?>
</head>
<?php
$ruta = ".";
$titulo = "Aplicación de Ventas";
?>
<body>
    
<?php 
include("paginas/includes/header.php"); 
include("paginas/includes/cargar_clases.php");
?>

    <div class="main-content">
        <h1>Bienvenido</h1>
        <p>Este es el contenido principal. El menú lateral se encuentra a la izquierda. Puedes navegar a través de las diferentes secciones del menú.</p>
        <button>Más información</button>
    </div>
    
    <?php
    echo $assetsLoader->getJsScripts();
    ?>
</body>
</html>
