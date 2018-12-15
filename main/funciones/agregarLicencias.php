<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){

	//recoger las variables del formulario

	$rut = strip_tags(addslashes($_POST['rut']));

  $fechaInicio = date('Y-m-d', strtotime($_POST['fechaInicio']));
  $fechaFinal = date('Y-m-d', strtotime($_POST['fechaFinal']));



$datos = mysql_query("select id_paciente from pacientes where rut ='$rut'");

$fila = mysql_fetch_array($datos);
$id_paciente = $fila['id_paciente'];



}

if($id_paciente != ""){
  mysql_query("INSERT INTO licencias(id_paciente, fecha_inicio,fecha_termino)
  VALUES ('$id_paciente','$fechaInicio','$fechaFinal')");
  echo"<script type=\"text/javascript\">alert('ingresado correctamente'); </script>";
  echo"<script type=\"text/javascript\">window.history.go(-1) </script>";

}
else {

  echo"<script type=\"text/javascript\">alert('La licencia no ha sido registrada. rut no encontrado.');  	</script>";
  echo"	<script type=\"text/javascript\">	window.history.go(-1)	</script>";

}

?>
