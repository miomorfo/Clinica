<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');



//Consultar USARIOS
function getUsuarios(){
	$usuarios = mysql_query("SELECT * FROM clientes");

	$resultado ='<table class="table table-striped">
					<thead>
				  <tr>
				  	<th scope="col">ID</th>
					<th scope="col">NOMBRE</th>
					<th scope="col">APELLIDOS</th>
					<th scope="col">USER</th>
					<th scope="col">PASS</th>
					<th scope="col">EMAIL</th>
					<th scope="col">TELÉFONO</th>
					<th scope="col">>NIVEL</th>
					<th></th>
					<th></th>
				  </tr> </thead>';

	while($fila = mysql_fetch_array($usuarios)){

	$resultado .='<tr>
					<td>'.$fila['id_cliente'].'</td>
					<td>'.$fila['nombre'].'</td>
					<td>'.$fila['apellidos'].'</td>
					<td>'.$fila['user'].'</td>
					<td>'.$fila['pass'].'</td>
					<td><a href="mailto:'.$fila['email'].'">'.$fila['email'].'</a></td>
					<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
					<td>'.$fila['nivel'].'</td>
					<td><a href="editar_usuarios.php?id='.$fila['id_cliente'].'" class="enlace_rojo">Editar</a></td>
					<td><a href="borrar_usuarios.php" class="enlace_rojo">Borrar</a></td>
				  </tr>';
	}

	$resultado .='</table>';
	return $resultado;
}
//fin function getUsuarios()

//consular Pacientes

function getPacientes(){

	$pacientes = mysql_query("SELECT * FROM pacientes");

	$resultado ='<table class="table table-striped">
				  <tr>
				  <th scope="col">ID</th>
					<th scope="col">RUT</th>
					<th scope="col">NOMBRES</th>
					<th scope="col">APELLIDOS</th>
					<th scope="col">SEXO</th>
					<th scope="col">ANT. FAMILIARES</th>
					<th scope="col"ANT. PERSONALES</th>
					<th scope="col"TELEFONO</th>
					<th scope="col"PREVISIÓN</th>
					<th scope="col"DIRECCIÓN</th>
					<th scope="col">CORREO</th>
					<th scope="col">FECHA NACIMIENTO</th>
					<th scope="col">TIPO ENFERMEDAD</th>
					<th></th>
					<th></th>
				  </tr>';

					while($fila = mysql_fetch_array($pacientes)){

					$resultado .='<tr>

									<td>'.$fila['id_paciente'].'</td>
									<td>'.$fila['rut'].'</td>
									<td>'.$fila['nombre'].'</td>
									<td>'.$fila['apellidos'].'</td>
									<td>'.$fila['sexo'].'</td>
									<td>'.$fila['antecedentes_familiares'].'</td>
									<td>'.$fila['antecedentes_personales'].'</td>
									<td><a href="tel:'.$fila['telefono'].'">'.$fila['telefono'].'</a></td>
									<td>'.$fila['prevision'].'</td>
									<td>'.$fila['direccion'].'</td>
									<td><a href="mailto:'.$fila['correo'].'">'.$fila['correo'].'</a></td>
									<td>'.$fila['fecha_nacimiento'].'</td>

									<td><a href="editar_paciente.php?id='.$fila['id_paciente'].'" class="enlace_rojo">Editar</a></td>
									<td><a href="borrar_paciente.php" class="enlace_rojo">Borrar</a></td>
									</tr>';
								}

	$resultado .='</table>';
	return $resultado;
}



?>
