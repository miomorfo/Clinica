<?php

session_start();

//impedir el acceso a personas que no se han logeado
if($_SESSION['nivel']=='1' || $_SESSION['nivel']=='2'){


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
    <title>Intranet Clinica</title>
  </head>
  <body>
    <a href="../login/salir.php">cerrar sesión</a>
  </body>
</html>

<?php
}else{
  define('PAGINA_INCIO','../index.php?mensaje=sin_permiso');
  header('Location: '.PAGINA_INCIO);
}

?>
