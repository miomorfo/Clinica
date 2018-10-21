<?php

$usuario = $_POST['p_username'];
//filtrado de letras y textos
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


$password = $_POST['p_password'];
//filtrado de letras y textos
$password = addslashes($password);
$password = strip_tags($password);


//conexión a la base de datos

//validación de datos ingresados
if($usuario == 'prueba' && $password == '123'){
  echo "bienvenido";
}else{

  //mensaje por GET en la URL
  define('PAGINA_INCIO' , '../index.php?mensaje=error_de_logeo');
  header('Location: '.PAGINA_INCIO); //el header direcciona
}

?>
