<?php

session_start();
echo  "<h1>bienvenido a la intranet, ".$_SESSION['nombre']." </h1>"

if($_SESSION['nivel']== '1'){
  echo "<p>permisos de acceso nivel 1</p>";
}else{
  echo "<p>permisos de acceso nivel 2</p>";
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="../login/salir.php">cerrar sesión</a>
  </body>
</html>
