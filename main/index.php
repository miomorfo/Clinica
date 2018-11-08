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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Intranet Clinica</title>
  </head>
  <body>

  <header>

  </header>
  <nav class = "menu">
    <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a href="index.php">Médicos</a></li>
      <li class="nav-item active"><a href="index.php">Aistentes</a></li>
      <li class="nav-item active"><a href="index.php">Challa</a></li>
      <li class="nav-item active"><a href="index.php"></a></li>
    </ul>
  </div>
  </nav>

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
