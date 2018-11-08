<?php

//limpiar variables de session
unset($_SESSION);

//borrar la session
session_destroy();

//redireccionar a la pagina de login
define('PAGINA_INCIO' , '..index.php?mensaje=adios');
header('Location: '.PAGINA_INCIO); //el header direcciona

?>
