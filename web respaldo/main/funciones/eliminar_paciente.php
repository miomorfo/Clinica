<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==2){
	
    $id = $_GET['id'];

    mysql_query("DELETE FROM pacientes WHERE id_paciente='$id'");






	define('PAGINA_INICIO','../pacientes.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>