<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){

	//recoger las variables del formulario

//	$rut = $_GET['rut'];

	$rut = strip_tags(addslashes($_POST['rut']));
	$farmaco = strip_tags(addslashes($_POST['farmaco']));
	$dosis = strip_tags(addslashes($_POST['dosis']));

echo $rut;
echo $farmaco;
echo $dosis;

date_default_timezone_set('America/Santiago');
$fechaActual = date("Y-m-d");



$datos = mysql_query("select id_paciente from pacientes where rut ='$rut'");

$fila = mysql_fetch_array($datos);
$id_paciente = $fila['id_paciente'];
echo $id_paciente;






if($id_paciente != ""){

	mysql_query("INSERT INTO farmacos(id_paciente, nombre, dosis, fecha_receta)
	VALUES ('$id_paciente','$farmaco','$dosis','$fechaActual')");

echo"<script type=\"text/javascript\">alert('ingresado correctamente'); </script>";
echo"<script type=\"text/javascript\">window.history.go(-1) </script>";

}
else {
echo"<script type=\"text/javascript\">alert('El farmaco no ha sido ingresado. rut no encontrado.');
	</script>";

echo"	<script type=\"text/javascript\">
	  	window.history.go(-1)
	</script>";


}

}



?>
