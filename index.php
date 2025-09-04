<?php
    require_once('modelo/ContenidoMultimedia.php');
    require_once('modelo/Pelicula.php');
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table {
            border-collapse: collapse;
        }
        table, td, th, td {
            border: 1px solid black;
        }

    </style>
</head>
<body>
    
    <p>Creando Despacito</p>
    <?php
        $cancion = new ContenidoMultimedia("Despacito", "Cancion de despacito con Luis Fonsi y Daddy Yankee",
                                4,42);
    ?>
    <p>La cancion de despacito queda como:</p>
    <table>
        <tr>
            <?=$cancion?>
        </tr>
    </table>

    <p>Creando Avatar</p>
    <?php
        $peli = new Pelicula("Avatar", "Pelicula de Ciencia-Ficcion con unos seres azules",
                                2,48,37,'720p');
    ?>
    <p>La pelicula queda como:</p>
    <table>
        <tr>
            <?=$peli?>
        </tr>
    </table>

    <p>Cambiando la calidad a 8K</p>
    <?php $peli->setCalidad('8k'); ?>
    <p>La pelicula queda como:</p>
    <table>
        <tr>
            <?=$peli?>
        </tr>
    </table>


</body>
</html>