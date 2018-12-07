<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==2){
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
    
    $rut = strip_tags(addslashes($_POST['rut']));
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$sexo = strip_tags(addslashes($_POST['sexo']));
	$antecedentes_familiares = strip_tags(addslashes($_POST['antecedentes_familiares']));
	$antecedentes_personales = strip_tags(addslashes($_POST['antecedentes_personales']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	$prevision = strip_tags(addslashes($_POST['prevision']));
	$correo = strip_tags(addslashes($_POST['correo']));
	$fecha_nacimiento = strip_tags(addslashes($_POST['fecha_nacimiento']));
	
	mysql_query("INSERT INTO pacientes (rut, nombre, apellidos, sexo, antecedentes_familiares, antecedentes_personales, telefono, prevision, correo, fecha_nacimiento) VALUES ('$rut','$nombre','$apellidos','$sexo','$antecedentes_familiares','$antecedentes_personales','$telefono','$prevision','$correo','$fecha_nacimiento')");

	define('PAGINA_INICIO','../pacientes.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>
