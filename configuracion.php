<?php

  $dbhost = 'localhost';  // dirección de host
  $db = 'clinica';  //nombre de las base de datos
  $dbuser = 'root'; // usuario de la base de datos
  $dbpass = '';


  //conexion y seleccion
  //mysqli_connect('$dbhost','$dbuser','$dbpass') or die ("No se ha podido conectar al servidor de Base de datos");
  //mysql_select_db('$db') or die ( " no se ha podido seleccionar a la base de datos" );

  //inicio de session
  //session_start();

  $enlace = mysqli_connect("127.0.0.1", "root", "", "clinica");

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  echo "Éxito: Se realizó una conexión apropiada a MySQL!." . PHP_EOL;
  echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;



//__________




?>
