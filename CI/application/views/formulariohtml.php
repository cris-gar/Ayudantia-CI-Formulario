<h1>Registro de alumnos</h1>


Nombre:
<?php
foreach ($query as $alumno) {
    ?>

    <li><?php echo $alumno->nombre; ?></li>
    <li><?php echo $alumno->correo; ?></li>


<?php } ?>
<?php
?>



