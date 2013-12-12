<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
	
	<?php
	$atributos = array(
			'id' => 'form',
			'name' => 'form'
	);
	echo form_open(null, $atributos);
	echo validation_errors();

	?>
	<p>Nombre del Curso:</p>
	<?php
	$input_nombre = array(
			'name' => 'nombre',
			'id' => 'nombre',
			'maxlength' => '255',
			'size' => '50',
			'value' => set_value('nombre'),
			
	);

	echo form_input($input_nombre);
	echo "<br>";
	?>
	<select name="comuna">
		<option value="">Seleccione un Alumno</option>
		<?php foreach ($query as $datos)
		{
			?>
		<option value="<?php echo $datos->idalumno?>">
			<?php echo $datos->nombre." ".$datos->apellido?>
		</option>
		<?php }?>
	</select>
	<?php  
	echo "<br>";

	echo form_submit('miagregada', 'Agregar');

	echo form_close(); ?>

</body>

</html>

