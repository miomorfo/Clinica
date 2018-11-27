<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');



//Consultar USARIOS
function getUsuarios(){
	$usuarios = mysql_query("SELECT * FROM usuarios");

	$resultado ='<table class="table">
			<thead>
				  <tr>
				  	<th class="bg-info" scope="col"><strong>ID</strong></th>
					<th class="bg-info"><strong>NOMBRE</strong></th>
					<th class="bg-info"><strong>APELLIDOS</strong></th>
					<th class="bg-info"><strong>USER</strong></th>
					<th class="bg-info"><strong>PASS</strong></th>
					<th class="bg-info"><strong>EMAIL</strong></th>
					<th class="bg-info"><strong>TELÉFONO</strong></th>
					<th class="bg-info"><strong>NIVEL</strong></th>
					<th class="bg-info"></th>
					<th class="bg-info"></th>
				  </tr> </thead>';

	while($fila = mysql_fetch_array($usuarios)){

	$resultado .='<tr>
					<td>'.$fila['id'].'</td>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['apellidos'].'</td>
					<td>'.$fila['user'].'</td>
					<td>'.$fila['pass'].'</td>
					<td><a href="mailto:'.$fila['email'].'">'.$fila['email'].'</a></td>
					<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
					<td>'.$fila['nivel'].'</td>
					<td><button class="btn btn-light my-2 my-sm-0" type="button"><a href="editar_usuarios.php?id='.$fila['id'].'" class="enlace_rojo">Editar</a></button></td>
					<td><button class="btn btn-light my-2 my-sm-0" type="button"><a href="borrar_usuarios.php" class="enlace_rojo">Borrar</a></button></td>
				  </tr>';
	}

	$resultado .='</table>';
	return $resultado;
}
//fin function getUsuarios()



?>
