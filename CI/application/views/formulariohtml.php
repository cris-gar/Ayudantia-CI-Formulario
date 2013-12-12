<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">


        <script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>
    </head>
    <body>

        <h1>Registro de alumnos</h1>


        Nombre:
        <?php
        foreach ($query as $alumno) {
            ?>

        <li><?php echo $alumno->nombre; ?></li>
        <li><?php echo $alumno->correo; ?></li>
        <a href="<?php base_url() ?>editar/<?php echo $alumno->idalumno; ?>">Editar</a>
        <a href="javascript:void(0);"
           onclick="eliminar('<?php base_url() ?>eliminar/<?php echo $alumno->idalumno; ?>')">Eliminar</a>

    <?php } ?>
    <?php
    ?>
</body>

</html>


