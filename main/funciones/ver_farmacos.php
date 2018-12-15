<?php


$rut=$_GET['rut'];

function getFarmacos(){
		$recetas = mysql_query("SELECT farmacos.nombre, farmacos.dosis, farmacos.fecha_receta FROM farmacos inner JOIN pacientes ON farmacos.id_paciente = pacientes.id_paciente WHERE pacientes.rut='$rut'");
		
		
		
		
			$resultado ='<table class="table table-stripped">
							<thead>
							  <tr>
						  
							<th scope="col">NOMBRE</th>
							<th scope="col">DOSIS</th>
							<th scope="col">FECHA RECETA</th>
					
							</tr>
							
						  </thead>';
		
			while($fila2 = mysql_fetch_array($recetas)){
		
			$resultado .='
						<tbody>
						<tr>
							<td>'.$fila2['nombre'].'</td>
							<td>'.$fila2['dosis'].'</td>
							<td>'.$fila2['fecha_receta'].'</td>
							
						  </tr>
						  <tbody>';
			}
		
			$resultado .='</table>';
			return $resultado;
		}
?>