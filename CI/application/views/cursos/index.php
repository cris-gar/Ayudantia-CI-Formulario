<ul>
    <label>Curso: </label>
    <?php
    foreach ($query as $query) {
        ?>

        <li><?php echo $query->nombre; ?>
            <?php echo $query->apellido; ?> esta en:
            <?php echo $query->curso; ?>
        </li>
    <?php } ?>
    <?php
    ?>


