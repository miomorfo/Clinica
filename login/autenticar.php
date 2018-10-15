<?php

$usuario = $_POST['p_username'];
//filtrado de letras y textos
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


$password = $_POST['p_password'];
//filtrado de letras y textos
$password = addslashes($password);
$password = strip_tags($password);


?>
