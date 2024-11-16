<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de consolas antiguas de Nintendo</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

</head>



<body>
    <div class="contenedor">

        <div class="box">


            <h1>Venta de consolas antiguas de Nintendo</h1>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
                <?php foreach ($consolas as $consola) {  ?>
                    <tr>
                        <td><?php echo $consola["id"] ?></td>
                        <td><?php echo $consola["nombre"] ?></td>
                        <td><?php echo $consola["precio"] ?></td>
                        <td>
                            <a href="<?php echo base_url("detalle/") . $consola['id']; ?>"> Detalle </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</body>

</html>