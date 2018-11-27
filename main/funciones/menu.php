<?php

//mostrar el menú del Medico con variable de sesion $_SESSION['nivel']==1
function getMenuMedico(){
	$resultado='
		<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
				<nav class="menu">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto" id="mn">
						<li class="nav-item"><a class="nav-link" href="index.php" title="Inicio">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="usuarios.php" title="Usuarios">Usuarios</a></li>
						<li class="nav-item"><a class="nav-link" href="clientes.php" title="Clientes">Clientes</a></li>
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
	<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
				<nav class="menu">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="clientes.php" title="Clientes">Clientes</a></li>
					</ul>
				</div>
				</nav>
	</nav>
	';
	return $resultado;
}


?>
