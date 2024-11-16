<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

    <title>Venta de consolas antiguas de Nintendo</title>
</head>
<body>
<div class="contenedor">

<div class="box">
    <h1>Detalle de la consola</h1>
    <p>ID: <?php  echo $consola["id"] ?></p>
    <p>Nombre: <?php echo $consola["nombre"] ?></p>
    <p>Precio: <?php echo $consola["precio"] ?> </p>
    <p>Cantidad disponible: <?php echo $consola["stock"] ?> </p>
    <p>Código interno: <?php echo $consola["codigo"] ?> </p>
</div>
</div>
</body>
</html>