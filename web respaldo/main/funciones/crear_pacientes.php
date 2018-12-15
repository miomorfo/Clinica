<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==2){
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
    
    $rut = strip_tags(addslashes($_POST['rut']));
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$sexo = strip_tags(addslashes($_POST['sexo']));

	$telefono = strip_tags(addslashes($_POST['telefono']));
	$prevision = strip_tags(addslashes($_POST['prevision']));
	$direccion = strip_tags(addslashes($_POST['direccion']));
	$correo = strip_tags(addslashes($_POST['correo']));
	
	
	mysql_query("INSERT INTO pacientes (id_cliente, rut, nombre, apellidos, sexo, telefono, prevision, direccion, correo) VALUES ('3','$rut','$nombre','$apellidos','$sexo','$telefono','$prevision','$direccion', '$correo')");

	define('PAGINA_INICIO','../pacientes.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>
