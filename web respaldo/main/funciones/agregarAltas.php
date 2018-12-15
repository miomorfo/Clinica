<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){

	//recoger las variables del formulario


	$rut = strip_tags(addslashes($_POST['rut']));
  $fechaFinal = date('Y-m-d', strtotime($_POST['fechaFinal']));

$datos = mysql_query("select id_paciente from pacientes where rut ='$rut'");
$fila = mysql_fetch_array($datos);
$id_paciente = $fila['id_paciente'];



}

if($id_paciente != ""){
  mysql_query("INSERT INTO Altas(id_paciente, fecha, estado)
  VALUES ('$id_paciente','$fechaFinal','1')");
  echo"<script type=\"text/javascript\">alert('ingresado correctamente'); </script>";
  echo"<script type=\"text/javascript\">window.history.go(-1) </script>";
}
else {
  echo"<script type=\"text/javascript\">alert('la fecha del alta no ha sido ingresado. rut no encontrado.');	</script>";
  echo"	<script type=\"text/javascript\">	window.history.go(-1) </script>";


}

?>
