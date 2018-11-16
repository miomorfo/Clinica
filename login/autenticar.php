<?php

include('../configuracion.php');

//prueba de conexion


$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query( $enlace, $consulta ) or die ( "Algo watió en la consulta a la base de datos");

// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellidos</th>";
echo "</tr>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
  echo "<tr>";
  echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['apellidos'] . "</td>";
  echo "</tr>";
}

echo "</table>"; // Fin de la tabla
// cerrar conexión de base de datos
mysqli_close( $enlace );

/*
$usuario = $_POST['p_username'];
//filtrado de letras, textos o caracteres raros
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);


$password = $_POST['p_password'];
//filtrado de letras y textos
$password = addslashes($password);
$password = strip_tags($password);


//conexión a la base de datos



$ip = $_SERVER['REMOTE_ADDR']; //obtener la IP de quien se conecta

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
*/

//inicio  los servicios
session_start();
$_SESSION['nivel'] = '2';
define('PAGINA_INCIO','../main/index.php');
header('Location: '.PAGINA_INCIO);
?>
