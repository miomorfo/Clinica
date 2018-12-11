<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==2){
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
	//recibe el id por get del editar_paciente.php
	$rut = $_GET['rut'];
	
    
    $antecedentes_familiares = strip_tags(addslashes($_POST['antecedentes_familiares']));
	$antecedentes_personales = strip_tags(addslashes($_POST['antecedentes_personales']));
	
	mysql_query("UPDATE pacientes SET antecedentes_familiares='$antecedentes_familiares', antecedentes_personales='$antecedentes_personales' WHERE rut='$rut'");
    

	define('PAGINA_INICIO','../pacientes.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>