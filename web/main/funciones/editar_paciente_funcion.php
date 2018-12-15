<?php


include('configuracion.php');

if($_SESSION['nivel']==2){
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
	//recibe el id por get del editar_paciente.php
	$id = $_GET['id'];
	
    $rut = strip_tags(addslashes($_POST['rut']));
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	$prevision = strip_tags(addslashes($_POST['prevision']));
	$direccion = strip_tags(addslashes($_POST['direccion']));
	$correo = strip_tags(addslashes($_POST['correo']));
	
	
	mysql_query("UPDATE pacientes SET rut='$rut', nombre='$nombre', apellidos='$apellidos', telefono='$telefono', prevision='$prevision', direccion='$direccion', correo='$correo' WHERE id_paciente='$id'");

	define('PAGINA_INICIO','../pacientes.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>