<?php

include ('funciones/menu.php');

session_start();

//impedir el acceso a personas que no se han logeado
if($_SESSION['nivel']=='1' || $_SESSION['nivel']=='2'){




//asignar menu según el nivel de acceso

//de momento probaré solo dos menús
if($_SESSION['nivel']=='1'){

    $menu = getMenuAdministrador();

}else{
    $menu = getMenuMedico();
}


?>





<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Intranet Clinica</title>
  </head>
  <body>
  <header>

  </header>


  <?= $menu

   ?>

    <a href="..login/salir.php">cerrar sesión</a>
  </body>
</html>

<?php
}else{
  define('PAGINA_INCIO','..index.php?mensaje=sin_permiso');
  header('Location: '.PAGINA_INCIO);
}

?>
