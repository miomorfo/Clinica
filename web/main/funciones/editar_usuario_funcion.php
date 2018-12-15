<?php


include('configuracion.php');

if($_SESSION['nivel']==1){
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
	//recibe el id por get del editar_paciente.php
	$id = $_GET['id'];
	
    
	$nombre = strip_tags(addslashes($_POST['nombre']));
    $apellidos = strip_tags(addslashes($_POST['apellidos']));
    $user = strip_tags(addslashes($_POST['user']));
    $pass = strip_tags(addslashes($_POST['pass']));

	
	
	$email = strip_tags(addslashes($_POST['email']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	
	mysql_query("UPDATE clientes SET nombre='$nombre',apellidos='$apellidos', user='$user', pass='$pass', email='$email', telefono='$telefono' WHERE id_cliente='$id'");

	define('PAGINA_INICIO','../usuarios.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>