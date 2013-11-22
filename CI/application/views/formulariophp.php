<?php

$atributos = array(
	'name'=>'form',
	'id'=>'form',
	);
$nombre= array(
	'name'=> 'nombre',
	'id'=> 'nombre',
	'placeholder' =>'Nombre',
	);
$apellido = array(
	'name'=> 'apellido',
	'id'=> 'apellido',
	'placeholder' =>'Apellido',
	);
$correo = array(
	'name'=> 'email',
	'id'=> 'email',
	'placeholder' =>'Email',
	);
$submit = array(
	'name'=> 'enviar',
	'id'=> 'enviar',
	'value'=>'Enviar',
	);
echo form_open(null,$atributos);
echo form_input($nombre);
echo "<br/>";
echo form_input($apellido);
echo "<br/>";
echo form_input($correo);
echo "<br/>";
echo form_submit($submit);
echo form_close();