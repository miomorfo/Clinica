<?php

//mostrar el menú del Medico con variable de sesion $_SESSION['nivel']==1
/*function getMenuMedico(){
	$resultado='
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<nav class="menu">

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item"><a class="nav-link" href="index.php" title="Inicio">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="usuarios.php" title="Usuarios">Usuarios</a></li>
						<li class="nav-item"><a class="nav-link" href="pacientes.php" title="Pacientes">Pacientes</a></li>
						<li class="nav-item"><a class="nav-link" href="estadisticas.php" title="estadisticas">Estadisticas</a></li>



					</ul>
				</div>
				</nav>
	</nav>






	';

	return $resultado;
}
*/

function getMenuMedico(){
	$resultado='
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MENU</li>
		<!-- Optionally, you can add icons to the links -->
		<li><a href="index.php"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
		<li><a href="usuarios.php"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
		<li><a href="pacientes.php"><i class="fa fa-link"></i> <span>Pacientes</span></a></li>

		<li><a href="estadisticas.php"><i class="fa fa-link"></i> <span>Estadisticas</span></a></li>

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



//mostrar el menú del Asistente con variable de sesion $_SESSION['nivel']==2
function getMenuAsistente(){
	$resultado='
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MENU</li>
		<!-- Optionally, you can add icons to the links -->
		<li><a href="index.php"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
		<li><a href="usuarios.php"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
		<li><a href="pacientes.php"><i class="fa fa-link"></i> <span>Pacientes</span></a></li>
		<li><a href="horarios.php"><i class="fa fa-link"></i> <span>Horarios</span></a></li>
		<li><a href="estadisticas.php"><i class="fa fa-link"></i> <span>Estadisticas</span></a></li>

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
