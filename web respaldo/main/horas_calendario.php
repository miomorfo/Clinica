<?php 

header('Content-type: application/json');
$mysqli = new mysqli('localhost', 'root', '', 'consultadb');
$pdo=new PDO("mysql:dbname=consultadb;host=localhost","root","");

//se envió una accion o se quiere leer? ternaria 
$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
    case 'agregar':
        //instruccion deagregado
        $sentenciaSQL = $pdo->prepare("INSERT INTO horas(title,descripcion,start,end,rut,nombre,apellidos,telefono,correo)
        VALUES(:title,:descripcion,:start,:end,:rut,:nombre,:apellidos,:telfono,:correo)");

        $respuesta=$sentenciaSQL->execute(array(
            "title" =>$_POST['title'],
            "descripcion" =>$_POST['descripcion'],
            "start" =>$_POST['start'],
            "end" =>$_POST['end'],
            "rut" =>$_POST['rut'],
            "nombre" =>$_POST['nombre'],
            "apellidos" =>$_POST['apellidos'],
            "telefono" =>$_POST['telefono'],
            "correo" =>$_POST['correo'],
        ));
        echo json_encode($respuesta);
        break;
    case 'eliminar':
        //instruccion de eliminado
        echo "eliminar";
        break;
    case 'modificar':
        //instruccion de modificado
        echo "modificar";
        break;
    default:
        $sentenciaSQL = $pdo->prepare("SELECT * FROM horas");

        $sentenciaSQL->execute();
        
        $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        
        
        //$datos = mysql_query("SELECT * FROM horas");
        //$fila = mysql_fetch_array($datos);
        echo json_encode($resultado);
        
        break;


}




?>