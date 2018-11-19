<?php

//mostrar el menú del Medico con variable de sesion $_SESSION['nivel']==1
function getMenuMedico(){
	$resultado='
				<nav class="menu">
					<ul>
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="usuarios.php" title="Usuarios">Usuarios</a></li>
						<li><a href="clientes.php" title="Clientes">Clientes</a></li>
					</ul>
				</nav>
	';
	return $resultado;
}

//mostrar el menú del Asistente con variable de sesion $_SESSION['nivel']==2
function getMenuAsistente(){
	$resultado='
				<nav class="menu">
					<ul>
						<li><a href="index.php" title="Inicio">Inicio</a></li>
						<li><a href="clientes.php" title="Clientes">Clientes</a></li>
					</ul>
				</nav>
	';
	return $resultado;
}


?>
