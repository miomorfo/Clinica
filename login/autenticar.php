<?php

include('../configuracion.php');


$usuario = $_POST['p_username'];
//filtrado de letras, textos o caracteres raros
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


$password = $_POST['p_password'];
//filtrado de letras y textos
$password = addslashes($password);
$password = strip_tags($password);


//conexión a la base de datos

$usuarios = mysqli_query("SELECT * FROM usuarios WHERE user='$usuario' and pass='$password' ");


//$ip = $_SERVER['REMOTE_ADDR']; //obtener la IP de quien se conecta

//validación de datos ingresados son correctos
//si hay alguna fila en el resultado
if($fila = mysqli_fetch_array($usuarios)){

  //variables de sessión
  //una vez se compruebe que los valores de logeo son correctos
  session_start();
  $_SESSION['nombre'] = $fila['nombre'];
  $_SESSION['nivel'] = $fila['nivel'];
  $_SESSION['telefono']=$fila['telefono'];

  define('PAGINA_INCIO','../main/index.php');
  header('Location: '.PAGINA_INCIO);
}else{
  //mensaje por GET en la URL
  define('PAGINA_INCIO' , '../index.php?mensaje=error_de_logeo');
  header('Location: '.PAGINA_INCIO); //el header direcciona
}

?>
