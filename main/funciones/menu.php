<?php

//mostrar el menú del Medico con variable de sesion $_SESSION['nivel']==1
function getMenuMedico(){
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

//mostrar el menú del Asistente con variable de sesion $_SESSION['nivel']==2
function getMenuAsistente(){
	$resultado='
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<nav class="menu">
					<ul>
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="pacientes.php" title="Pacientes">Pacientes</a></li>
					</ul>
				</nav>
	</nav>
	';
	return $resultado;
}


?>
