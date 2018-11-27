<?php

include('funciones/menu.php');
include('funciones/configuracion.php');

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1){

	$id = $_GET['id'];

	$usuarios = mysql_query("SELECT * FROM usuarios WHERE id='$id'");

	while($fila = mysql_fetch_array($usuarios)){
		$id = $fila['id'];
		$nombre = $fila['nombre'];
		$apellidos = $fila['apellidos'];
		$user = $fila['user'];
		$pass = $fila['pass'];
		$email = $fila['email'];
		$telefono = $fila['telefono'];
		$nivel = $fila['nivel'];

	}


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2

	$menu = getMenuMedico();
	$perfil = 'MEDICO';



?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Intranet</title>
<!--<link href="styles.css" rel="stylesheet" type="text/css"/>-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<script type="text/javascript" src="intranet.js"></script>
</head>

<body>

<div class="container">
		<header class="row">
			<div class="col-md-10">
				<h1>Intranet Clinica Psiquiatrica</h1>
				<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre'] ?></h2>
			</div>
			<div class="col-md-2">
				<div class="cerrar_sesion">
						<a href="../login/salir.php">Cerrar sesión</a>
				</div><!--end .cerrar_sesion -->
			</div>

		</header>


<div class="row">
	<div class="col-md-10">
		<?= $menu ?>
	</div>

<div class="col-md-2">
	<div class="clearfix"></div>

<h2 class="principal">Editar Usuarios</h2>
<div class="formulario">
	<form action="funciones/crear_usuarios.php" method="post" id="form_home">

    	<label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" />

        <label for="apellidos">Apellidos</label>
        <input id="apellidos" name="apellidos" />

        <label for="user">Usuario</label>
        <input id="user" name="user" />

        <label for="pass">Contraseña</label>
        <input id="pass" name="pass" />

        <label for="email">Email</label>
        <input id="email" name="email" />

        <label for="telefono">Teléfono</label>
        <input id="telefono" name="telefono" />

        <label for="nivel">Nivel</label>
        <input id="nivel" name="nivel" />

        <input type="submit" value="Dar de Alta" class="b_inicio"/>

    </form>
</div>
</div>
</div>


<footer class="row">
<div class="left col-md-8">
Teléfono: <strong><a href="tel:<?= $_SESSION['telefono'] ?>"><?= $_SESSION['telefono'] ?></a></strong>
</div><!--end .left-->

<div class="right col-md-4">
<?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong>
</div><!--end .right-->
</footer>


</div><!--end .container-->
</body>
</html>

<?
} else {

	define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);

}
?>
