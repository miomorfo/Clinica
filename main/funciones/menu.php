<?php

//mostrar el menú del Medico con variable de sesion $_SESSION['nivel']==1


function getMenuMedico(){
	$resultado='
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MENU</li>
		<!-- Optionally, you can add icons to the links -->
		<li><a href="index.php"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
		<li><a href="usuarios.php"><i class="fa fa-user"></i> <span>Asistentes</span></a></li>
		

		<li><a href="ficha.php"><i class="fa fa-edit"></i> <span>Ficha médica</span></a></li>

		<li class="treeview">
			<a href="#"><i class="fa fa-area-chart"></i> <span>Estadísticas</span>
				<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="estadisticaspaciente.php">Estadísticas por paciente</a></li>
				<li><a href="estadisticas.php">Estadísticas generales</a></li>
			</ul>
		</li>
	</ul>






	';

	return $resultado;
}



//mostrar el menú del Asistente con variable de sesion $_SESSION['nivel']==2
function getMenuAsistente(){
	$resultado='
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MENU</li>
		<!-- Optionally, you can add icons to the links -->
		<li><a href="index.php"> <i class="fa fa-home"></i> <span>Inicio</span></a></li>
		
		<li><a href="pacientes.php"> <i class="fa fa-users"></i> <span>Pacientes</span></a></li>
		<li><a href="horarios.php"> <i class="fa fa-calendar"></i> <span>toma de hora</span></a></li>
		<li><a href="ficha.php"><i class="fa fa-edit"></i> <span>Ficha médica</span></a></li>
		

		<!--<li class="treeview">
			<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
				<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="#">Link in level 2</a></li>
				<li><a href="#">Link in level 2</a></li>
			</ul>
		</li>-->
	</ul>

	';
	return $resultado;
}


?>
