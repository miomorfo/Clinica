<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){


$enfermedad = $_GET['enfermedad'];
$rut = $_GET['rut'];


$datosEnf = mysql_query("select id_enfermedad from tipos_enfermedades where nombre = '$enfermedad'");
$filaEnf = mysql_fetch_array($datosEnf);
$id_enfermedad = $filaEnf['id_enfermedad'];


$datosRut = mysql_query("select id_paciente from pacientes where rut ='$rut'");
$filaRut = mysql_fetch_array($datosRut);
$id_paciente = $filaRut['id_paciente'];


date_default_timezone_set('America/Santiago');
$fechaActual = date("Y-m-d");



if($id_paciente != ''){
  mysql_query("INSERT INTO diagnosticos(id_paciente, id_enfermedad, fecha_diagnostico)
  VALUES ('$id_paciente','$id_enfermedad','$fechaActual')");

  echo"<script type=\"text/javascript\">alert('ingresado correctamente'); </script>";
  echo"<script type=\"text/javascript\">window.history.go(-1) </script>";


}
else {
  echo"<script type=\"text/javascript\">alert('El diagnostico no ha sido ingresado. rut no encontrado.');
  	</script>";

  echo"	<script type=\"text/javascript\">
  	  	window.history.go(-1)
  	</script>";


	} 
}
?>
