<?php 

header('Content-type: application/json');
$mysqli = new mysqli('localhost', 'root', '', 'consultadb');
$pdo=new PDO("mysql:dbname=consultadb;host=localhost","root","");

$sentenciaSQL = $pdo->prepare("SELECT * FROM horas");

$sentenciaSQL->execute();

$resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


//$datos = mysql_query("SELECT * FROM horas");
//$fila = mysql_fetch_array($datos);
echo json_encode($resultado);

?>