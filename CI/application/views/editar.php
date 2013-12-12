 <?php

$atributos = array(
	'name'=>'form',
	'id'=>'form',
	);
$nombre= array(
	'name'=> 'nombre',
	'id'=> 'nombre',
	'placeholder' =>'Nombre',
        'value' => $query->nombre,
	);
$apellido = array(
	'name'=> 'apellido',
	'id'=> 'apellido',
	'placeholder' =>'Apellido',
    'value' => $query->apellido,
	);
$correo = array(
	'name'=> 'email',
	'id'=> 'email',
	'placeholder' =>'Email',
    'value' => $query->correo,
	);
$submit = array(
	'name'=> 'enviar',
	'id'=> 'enviar',
	'value'=>'Enviar',
	);
echo form_open(null,$atributos);
echo validation_errors();
echo "<br/>".'</br>';

echo form_input($nombre);
echo "<br/>";
echo form_input($apellido);
echo "<br/>";
echo form_input($correo);
echo "<br/>";
echo form_submit($submit);
echo form_close();