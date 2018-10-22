<?php

$usuario = $_POST['p_username'];
//filtrado de letras, textos o caracteres raros
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


$password = $_POST['p_password'];
//filtrado de letras y textos
$password = addslashes($password);
$password = strip_tags($password);


//conexión a la base de datos

//validación de datos ingresados
if($usuario == 'prueba' && $password == '123'){

  //variables de sessión
  //una vez se compruebe que los valores de logeo son correctos
  session_start();
  $_SESSION['nombre'] = 'prueba';

  //creación de niveles de acceso a la plataforma
  $_SESSION['nivel'] = '1';

  define('PAGINA_INCIO','../main/index.php');
  header('Location: '.PAGINA_INCIO);
}else{

  //mensaje por GET en la URL
  define('PAGINA_INCIO' , '../index.php?mensaje=error_de_logeo');
  header('Location: '.PAGINA_INCIO); //el header direcciona
}

?>
