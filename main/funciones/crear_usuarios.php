<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){
	
	//recoger las variables del formulario
	
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$user = strip_tags(addslashes($_POST['user']));
	$pass = strip_tags(addslashes($_POST['pass']));
	$email = strip_tags(addslashes($_POST['email']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	$nivel = strip_tags(addslashes($_POST['nivel']));


	$rut = strip_tags(addslashes($_POST['rut']));
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$sexo = strip_tags(addslashes($_POST['sexo']));
	$antecedentes_familiares = strip_tags(addslashes($_POST['antecedentes_familiares']));
	$antecedentes_personales = strip_tags(addslashes($_POST['antecedentes_personales']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	$prevision = strip_tags(addslashes($_POST['previsión']));
	$correo = strip_tags(addslashes($_POST['correo']));
	$fecha_nacimiento = strip_tags(addslashes($_POST['fecha_nacimiento']));
	
	mysql_query("INSERT INTO clientes (nombre, apellidos, user, pass, email, telefono, nivel) VALUES ('$nombre','$apellidos','$user','$pass','$email','$telefono','$nivel')");

	define('PAGINA_INICIO','../usuarios.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>











