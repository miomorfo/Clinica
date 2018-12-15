<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){
	
    $id = $_GET['id'];

    mysql_query("DELETE FROM clientes WHERE id_cliente='$id'");






	define('PAGINA_INICIO','../usuarios.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>